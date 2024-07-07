<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campaign;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        $campaigns=Campaign::select('id','short_title','description','goal','goal_raised','poster_image_2')->get();
        $articles=Article::select('id','short_title','description','poster_image_2','created_at','added_by')->get();
        return view('index',[
            'campaigns'=>$campaigns,
            'articles'=>$articles,
        ]);
    }
    function campaign_page($id){
        $campaign=Campaign::select('title','description','goal','goal_raised','poster_image')->where('id',$id)->first();
         return view('campaign.cause-details',
         [
            'campaign'=>$campaign,

            ]);


    }
    function article_details($id){
        $article=Article::select('title','description','quote','poster_image_1','poster_image_2','created_at','added_by')->where('id',$id)->first();
        return view('article.blog-details',
        [
            'article'=>$article,
        ]);
    }
}
