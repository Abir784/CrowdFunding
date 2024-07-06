<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    public function index(){
        return view("form");
    }
    public function register(Request $register){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'address' => 'required',
                'phone' => 'required'
            ]
        );
        print_r($request->all());
    }
}
