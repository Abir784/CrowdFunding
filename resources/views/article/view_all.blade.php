@extends('layouts.app')
@section('content')
<section class="page-title-area">
    <div class="container">
        <div class="title-area-data">
          <h2>Articles</h2>
          <p>Share your thoughts</p>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
            <li class="breadcrumb-item active" aria-current="page">Articles</li>
        </ol>
    </div>
 </section>
 <section class="gap">


    <div class="container">
        <div class="row mb-4">

        </div>
        <div class="row" id="filter_search">
            @forelse ($articles as $article )

            <div class="col-xl-4 col-md-6 ">
                <div class="news-article-one">
                  <img alt="news article img" width="400" height="280" src="{{asset('uploads/article/Small_poster/'.$article->poster_image_2)}}">
                  <a href="{{route('article.details',$article->id)}}"><h6>{{$article->created_at->format('M-d,Y')}}</h6></a>

                  <a href="{{route('article.details',$article->id)}}"><h3>{{$article->title}}</h3></a>
                </div>
            </div>
            @empty
            Nothing to Show

            @endforelse

         </div>
    </div>
 </section>
@endsection
