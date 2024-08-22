<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\Donation;
use App\Models\Campaign;
use DGvai\SSLCommerz\SSLCommerz;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function donation_form($id){
        return view('donation.donation_form',[
            'campaign_id'=>$id,
        ]);
    }
    public function donation_table(){
        $donations = Donation::where('user_id',Auth::id())->get();
        return view("donation.donation_table",[
            'donations'=>$donations,
        ]);
    }

    public function donation_form_post(Request $request){
        $campaign=Campaign::select('title','goal','goal_raised')->where('id',$request->campaign_id)->first();
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'zipcode' => 'required',
            'donation_amount' => 'required|numeric|max:'.($campaign-> goal - $campaign->goal_raised),
            ],[
                'donation_amount.max'=>'You can donate up to '.($campaign->goal - $campaign->goal_raised),
            ]);

        if(($campaign-> goal - $campaign->goal_raised) < ($request->donation_amount)){
            return back()->with('error','Please Check The Required Goal');
        }else{
            //all existing code
            Donation::create([
                'user_id'=>$request->user_id,
                'campaign_id'=>$request->campaign_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'city'=>$request->city,
                'zipcode'=>$request->zipcode,
                'donation_amount'=>$request->donation_amount,
                'payment_status'=>0,
                'created_at'=>Carbon::now(),
            ]);
            return redirect(route('paypal.payment',['amount'=>$request->donation_amount,
            'campaign_id'=>$request->campaign_id,
        ]));

        // return back()->with('success','Donation Added Successfully');
        }

}
}
