<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Campaign;
use App\Models\User;
use Carbon\Carbon;

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
        $article=Article::select('title','short_title','description','quote','poster_image_1','poster_image_2','created_at','added_by')->where('id',$id)->first();
        return view('article.blog-details',
        [
            'article'=>$article,
        ]);

    }
    function article_table(){
        $articles=Article::where('added_by',Auth::id())->get();
        return view('article.article_table',[
            'articles'=>$articles,
        ]);
    }

    function user_post(Request $request){

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'created_at'=>Carbon::now(),
        ]);
        return redirect(route('home'));
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

        $results = Campaign::where('title', 'like', "%$search%")->get();

        $search_results="";
        foreach($results as $campaign){
            $image_path=asset('uploads/campaign/Small_poster/'.$campaign->poster_image_2);
            $link_1=route('campaign.details',$campaign->id);
            $date=$campaign->created_at->format('M-d,Y');
            $link_2=route('campaign.details',$campaign->id);
            $title=$campaign->title;
            $search_results .= "<div class='col-xl-4 col-md-6'><div class='news-article-one'><img alt='news article img' src='".$image_path."' width='400' height='280'><a href='".$link_1."'><h6>".$date."</h6></a><a href='".$link_2."'><h3>".$title."</h3></a></div></div>";
    }
      echo $search_results;
    }
    public function filter(Request $request){
        $filter = $request->input('filter');
        echo $filter;
        die();

        if($filter==1){
            $results = Campaign::orderBy('created_at','DESC')->get();
        }elseif($filter==2){
            $results = Campaign::orderBy('created_at','ASC')->get();

        }elseif($filter==3){
            $results = Campaign::where('type',1)->get();

        }elseif($filter==4){
            $results = Campaign::where('type',2)->get();
        }

        $search_results="";
        foreach($results as $campaign){
            $image_path=asset('uploads/campaign/Small_poster/'.$campaign->poster_image_2);
            $link_1=route('campaign.details',$campaign->id);
            $date=$campaign->created_at->format('M-d,Y');
            $link_2=route('campaign.details',$campaign->id);
            $title=$campaign->title;
            $search_results .= "<div class='col-xl-4 col-md-6'><div class='news-article-one'><img alt='news article img' src='".$image_path."' width='400' height='280'><a href='".$link_1."'><h6>".$date."</h6></a><a href='".$link_2."'><h3>".$title."</h3></a></div></div>";
    }
      echo $search_results;
    }



}
