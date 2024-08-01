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
    public function donation_form(){
        return view('donation.donation_form');
    }
    public function campaign_form_post(Request $request){
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'city' => 'required',
            ]);
}
}
