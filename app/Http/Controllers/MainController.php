<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $campaigns=Campaign::select('id','short_title','description','goal','goal_raised','poster_image_2')->get();

        return view('index',[
            'campaigns'=>$campaigns,
        ]);
    }
    function campaign_page($id){
        $campaign=Campaign::select('title','description','goal','goal_raised','poster_image')->where('id',$id)->first();
         return view('campaign.cause-details',
         [
            'campaign'=>$campaign,

            ]);


    }
    
}
