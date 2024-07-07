@extends('layouts.app')
@section('content')
<section class="page-title-area" style="background-image:url(https://via.placeholder.com/1920x430)">
    <div class="container">
      <div class="title-area-data">
        <h2>Blog Details</h2>
        <p>Organisations committed to ending poverty worldwide.</p>
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">our blog</li>
          <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
      </ol>
    </div>
  </section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-details-text hoverimg">
            <figure>
              <img alt="img" class="w-100" src="{{asset("uploads/article/Large_poster/".$article->poster_image_1)}}">
            </figure>
            <div class="blog-details-two-style">
                <div class="article">
                  <h4>24<span>Mar, 2022</span></h4>
                </div>
                <h2>{{$article->title}}</h2>
                <div class="meta-info">
                  <ul>
                    <li><img alt="img" src="https://via.placeholder.com/60x60"><p>Posted by Thomas Smith</p></li>
                    <li><i class="fa-solid fa-eye"></i><h6>50K</h6>
                    <li><i class="fa-solid fa-message"></i><h6>50K</h6>
                  </ul>
                </div>
                <p class="pt-4">
                  {{$article->description}}
                </p>
                <figure>
                  <img class="mt-4 w-100" alt="img" src="{{asset("uploads/article/Small_poster/".$article->poster_image_2)}}">
                </figure>
                <div class="quote">
                  <i>
                  <svg fill="#000000" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 width="200px" height="200px" viewBox="0 0 91.674 91.674"
                 xml:space="preserve">
                  <path d="M38.157,0.003c-8.398,0.373-15.895,3.722-21.68,9.685C1.141,25.498,1.436,55.3,1.52,58.596l0.001,31.078
                    c0,1.104,0.896,2,2,2h30.691c1.104,0,2-0.896,2-2V58.981c0-1.104-0.896-2-2-2H18.527c0.003-2.562,0.313-25.309,10.186-35.455
                    c2.672-2.747,5.836-4.214,9.674-4.485c1.048-0.074,1.859-0.945,1.859-1.995V2.002c0-0.546-0.223-1.068-0.617-1.445
                    C39.234,0.179,38.71-0.031,38.157,0.003z"/>
                  <path d="M89.553,0.556c-0.395-0.377-0.906-0.587-1.472-0.553C79.684,0.375,72.186,3.725,66.4,9.688
                    C51.065,25.498,51.359,55.3,51.443,58.596l0.001,31.078c0,1.104,0.896,2,2,2h30.69c1.104,0,2-0.896,2-2V58.981
                    c0-1.104-0.896-2-2-2H68.452c0.003-2.562,0.313-25.309,10.185-35.455c2.673-2.747,5.837-4.214,9.675-4.485
                    c1.048-0.074,1.858-0.945,1.858-1.995V2.002C90.17,1.457,89.947,0.935,89.553,0.556z"/>
                  </svg>
                </i>
                  <h3>{{$article->quote}}</h3>
                </div>

                <div class="comment">
                  <h3>02 Comments</h3>
                  <ul>
                    <li class="single-comment">
                      <img alt="img" src="https://via.placeholder.com/120x120">
                      <a href="#">reply</a>
                      <div class="ps-lg-4">
                        <div class="d-flex align-items-center">
                          <h4>Valkor Smith</h4>
                          <span>January 7, 2023 at 12:21 am </span>
                          </div>
                          <p>Integer sollicitudin ligula non enim sodales, non lacinia Sewid commodo
                            are risus in euismod varius nullam feugiat ultrices.</p>
                      </div>
                    </li>
                    <li class="single-comment children">
                      <img alt="img" src="https://via.placeholder.com/120x120">
                      <a href="#">reply</a>
                      <div class="ps-lg-4">
                        <div class="d-flex align-items-center">
                          <h4>Willimes Dom</h4>
                          <span>January 7, 2023 at 12:21 am </span>
                          </div>
                          <p>Integer sollicitudin ligula non enim sodales, non lacinia Sewid commodo
                            are risus in euismod varius nullam feugiat ultrices.</p>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="comment">
                  <h3>Leave a Comment</h3>
                  <form class="leave-comment">
                    <div class="row">
                      <div class="col-lg-6">
                        <input type="text" name="name" placeholder="Full Name">
                      </div>
                      <div class="col-lg-6">
                        <input type="text" name="Email" placeholder="Email Id">
                      </div>
                    </div>
                    <input type="text" name="Subject" placeholder="Subject">
                    <textarea placeholder="Your Message"></textarea>
                    <button class="btn">
                      <span>Post Comment</span>
                    </button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
