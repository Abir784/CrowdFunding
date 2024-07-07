<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

function show_campaign_form(){
    return view('campaign.add_form');
}
function campaign_form_post(Request $request){
    $request->validate([
        'title'=>'required|max:500',
        'description'=>'required',
        'poster_image'=>'required|mimes:png,jpg|dimensions:max_width:500,max_height:593',
        'poster_image_2'=>'required|mimes:png,jpg|dimensions:max_width:588,max_height:440',
        'short_title'=>'required|max:250',
        'type'=>'required',
        'goal'=>'required',
    ]);


    
    $id=Campaign::insertGetId([
        'title'=>$request->title,
        'description'=>$request->description,
        'goal'=>$request->goal,
        'short_title'=>$request->short_title,
        'type'=>$request->type,
        'added_by'=>Auth::user()->id,
        'created_at'=>Carbon::now(),
    ]);

    $extention_1=$request->poster_image->getClientOriginalExtension();
    $file_name_1=$id.".".$extention_1;

    $request->poster_image->move(public_path('uploads/campaign/Large_poster'),$file_name_1);

    $extention_2=$request->poster_image_2->getClientOriginalExtension();
    $file_name_2=$id.".".$extention_2;
    $request->poster_image_2->move(public_path('uploads/campaign/Small_poster'),$file_name_2);

    Campaign::where('id',$id)->update([
        'poster_image'=>$file_name_1,
        'poster_image_2'=>$file_name_2,
    ]);

    return back()->with('success','Campaign Created Successfully');



}
function show_article_form(){
    return view ("article.add_form");
}



function article_form_post(Request $request){
    $request->validate([
        'title'=>'required|max:500',
        'description'=>'required',
        'poster_image_1'=>'required|mimes:png,jpg|dimensions:max_width:500,max_height:593',
        'poster_image_2'=>'required|mimes:png,jpg|dimensions:max_width:588,max_height:440',
        'short_title'=>'required|max:250',
        'quote'=>'required |max:150',
    ]);



    $id=Article::insertGetId([
        'title'=>$request->title,
        'description'=>$request->description,
        'quote'=>$request->quote,
        'short_title'=>$request->short_title,
        'added_by'=>Auth::user()->id,
        'created_at'=>Carbon::now(),
    ]);

    $extention_1=$request->poster_image_1->getClientOriginalExtension();
    $file_name_1=$id.".".$extention_1;

    $request->poster_image_1->move(public_path('uploads/article/Large_poster'),$file_name_1);

    $extention_2=$request->poster_image_2->getClientOriginalExtension();
    $file_name_2=$id.".".$extention_2;
    $request->poster_image_2->move(public_path('uploads/article/Small_poster'),$file_name_2);

    Article::where('id',$id)->update([
        'poster_image_1'=>$file_name_1,
        'poster_image_2'=>$file_name_2,
    ]);

    return back()->with('success','Article Created Successfully');



}
}
