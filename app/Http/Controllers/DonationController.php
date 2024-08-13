<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\Donation;

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

    public function donation_form_post(Request $request){
        dd($request->all());
        $request->validate([
            'city' => 'required',
            ]);
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
            'updated_at' => Carbon::now(),
        ]);
        return back()->with('success','Donation Added Successfully');

}
}
