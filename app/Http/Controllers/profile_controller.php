<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Models\User;

class profile_controller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view("profile_update.form");
    }

    public function update(Request $request){
       // print_r($request->all());

        $request->validate(
            [
                'name' => 'required',
                'phone_number' => 'required|size:11',
            ],
            [
                'name.required' => 'Name is required',
                'phone_number.required' => 'Phone number is required',
                'phone_number.size' => 'Phone number must be 11 digits',
                //'phone_number.numeric' => 'Phone number must be numeric',
            ]
            );
           User::where('id',Auth::user()->id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'updated_at' => Carbon::now(),
           ]);//id id check kore
           return back()->with('success','Profile Updated Successfully');
          // return redirect()->route('profile_update')->with('success','Profile Updated Successfully');
    }
}
