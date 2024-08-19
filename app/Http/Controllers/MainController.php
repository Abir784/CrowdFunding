<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campaign;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index(){
        $campaigns=Campaign::select('id','short_title','description','goal','goal_raised','poster_image_2','type')->get();
        $articles=Article::select('id','short_title','description','poster_image_2','created_at','added_by')->get();
        return view('index',[
            'campaigns'=>$campaigns,
            'articles'=>$articles,
        ]);
    }
    function campaign_page($id){
        $campaign=Campaign::select('title','description','goal','goal_raised','poster_image','type','id')->where('id',$id)->first();
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

    function campaign_table(){
        $campaigns=Campaign::where('added_by',Auth::id())->get();
        return view('campaign.campaign_table',[
            'campaigns'=>$campaigns,
        ]);
    }
    function campaigns_all(){
        $campaigns=Campaign::all();
        return view('campaign.all_campaign',[
            'campaigns'=>$campaigns,
        ]);
    }
    public function search(Request $request){
        $search = $request->input('search');
        $results = Campaign::where('name', 'like', "%$search%")->get();

        $search_results = '<div class="col-xl-4 col-md-6 "><div class="news-article-one"><img alt="news article img" src="{{asset('uploads/campaign/Small_poster/'.$campaign->poster_image_2)}}"><a href="{{route('campaign.details',$campaign->'.id.')}}"><h6>{{$campaign->created_at->'.format('M-d,Y').'}}</h6></a><a href="{{route('campaign.details',$campaign->'.id.')}}"><h3>The perfect way to end your campaign</h3></a></div></div>';

        echo $search_results;
    }

}
