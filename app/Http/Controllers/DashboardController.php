<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


class DashboardController extends Controller
{


    public function __construct()
{
    $this->middleware('auth');
}

public function index()
{
    return view('home');
}

}
