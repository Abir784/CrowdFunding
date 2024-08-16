<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\Invest;
use App\Models\Campaign;


class InvestmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function investment_form($id){
        return view('investment.investment_form',[
            'campaign_id'=>$id,
        ]);
    }

    public function investment_form_post(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'zipcode' => 'required',
            'investment_amount' => 'required|numeric',
            ]);
        $campaign=Campaign::select('goal','goal_raised','dilution')->where('id',$request->campaign_id)->first();
        if($campaign-> goal < ($request->investment_amount)){
            return back()->with('error','Please Check The Required Goal');
        }else{
            //all existing code
            $dilution=$campaign->dilution;
            $equity_percentage=($request->investment_amount * $dilution)/100;
        // dd($equity_percentage);
            Invest::create([
                'user_id'=>$request->user_id,
                'campaign_id'=>$request->campaign_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'city'=>$request->city,
                'equity_percentage'=>$equity_percentage,
                'zipcode'=>$request->zipcode,
                'investment_amount'=>$request->investment_amount,
                'payment_status'=>0,
                'created_at'=>Carbon::now(),
            ]);

        Campaign::where('id',$request->campaign_id)->update(
            [
                'goal_raised'=> ($campaign -> goal_raised + (int)($request->investment_amount)),
            ]
            );
        return back()->with('success','Investment Added Successfully');
        }

}
}