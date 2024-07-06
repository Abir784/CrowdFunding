@extends('layouts.app')
@section('content')
<section class="page-title-area">
<div class="container">
    <div class="title-area-data">
      <h2>Cause Details</h2>
      <p>Organisations committed to ending poverty worldwide.</p>
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
        <li class="breadcrumb-item active" aria-current="page">Our Causes</li>
        <li class="breadcrumb-item active" aria-current="page">Cause Details</li>
    </ol>
  </div>
</section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="offset-lg-1 col-lg-10">
          <div class="details-title">

            <h2>{{$campaign->title}}</h2>
            <h3>${{$campaign->goal}}<span> of ${{$campaign->goal_raised}} Raised</span></h3>
            <a href="#" class="btn"><span>Donate Now</span></a>
            <div class="progressbar">
                @php
                $progress=($campaign->goal_raised/$campaign->goal)*100;
                @endphp
               <div class="circle three" data-percent="{{$progress}}">
                   <div>{{$progress}}%</div>
              </div>
             </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="about-img hoverimg">
            <figure>
              <img alt="img" src="{{asset('uploads/campaign/Large_poster/'.$campaign->poster_image)}}">
            </figure>
          </div>
        </div>
        <div class="offset-lg-1 col-lg-10">
          <div class="details-title-two">
            <p class="pt-lg-5 pb-lg-5">{{$campaign->description}}</p>
          </div>
            <div class="share-post-icon">
              <h6>share post:</h6>
              <ul class="social-media-icon full">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook-f icon"></i>    </a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
</section>
{{--
<section class="page-title-area" style="background-image:url(https://via.placeholder.com/1920x430)">
    <div class="container">
      <div class="title-area-data">
        <h2>Cause Details</h2>
        <p>Organisations committed to ending poverty worldwide.</p>
      </div>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
          <li class="breadcrumb-item active" aria-current="page">Our Causes</li>
          <li class="breadcrumb-item active" aria-current="page">Cause Details</li>
      </ol>
    </div>
  </section>
  <section class="gap">
    <div class="container">
      <div class="row">
        <div class="offset-lg-1 col-lg-10">
          <div class="details-title">
            <p>in South Africa</p>
            <h2>45 million people with access to safe water or sanitation</h2>
            <h3>$86,200<span> of $35,100 Raised</span></h3>
            <a href="#" class="btn"><span>Donate Now</span></a>
            <div class="progressbar">
               <div class="circle three" data-percent="50">
                   <div>50%</div>
              </div>
             </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="about-img hoverimg">
            <figure>
              <img alt="img" src="https://via.placeholder.com/1296x593">
            </figure>
          </div>
        </div>
        <div class="offset-lg-1 col-lg-10">
          <div class="details-title-two">
            <p class="pt-lg-5 pb-lg-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore ma Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris ni si ut aliquip ex ea commodo consequat. Du dolor
            in reprehenderit in voluptate velit es se cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida ident, su
            nt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ni si ut aliquip ex eu fugiat nulla cep
            teur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="row change-we-img hoverimg">
            <div class="col-8">
              <figure>
                <img alt="We Need" class="w-100" src="https://via.placeholder.com/709x378">
              </figure>
            </div>
            <div class="col-4">
              <figure>
                <img alt="We Need" class="w-100" src="https://via.placeholder.com/343x401">
              </figure>
            </div>
            <div class="col-4">
              <figure>
                <img class="mt-4 w-100" alt="We Need" src="https://via.placeholder.com/343x401">
              </figure>
            </div>
            <div class="col-8">
              <figure>
                <img class="mt-4 w-100" alt="We Need" src="https://via.placeholder.com/709x378">
              </figure>
            </div>
          </div>
          <h6 class="pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut lab ore et dolore ma
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ni si ut aliquip ex ea commodo consequat. Du
          dolor in reprehenderit in voluptate velit es se cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida
          ident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
          <ul class="heart mt-5">
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Start New Campaign</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Financial and Business Lunch, an engaging and provocative</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Exceptional panel of global business leaders</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Teach your kids about giving</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Businesses failing or increasing automation.</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Take part in a charity run</h6></li>
              <li><i class="fa-solid fa-heart pe-3"></i><h6>Get involved with Decembeard</h6></li>
            </ul>
            <div class="youtube-video mt-5 mb-5 hoverimg">
              <a data-fancybox="" href="https://www.youtube.com/watch?v=1La4QzGeaaQ"><i>
                <svg enable-background="new 0 0 437.499 437.499" height="512" viewBox="0 0 437.499 437.499" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m46.875 437.498c-2.67 0-5.341-.687-7.751-2.06-4.868-2.777-7.874-7.95-7.874-13.566v-406.27c0-5.616 3.006-10.789 7.874-13.566 4.913-2.762 10.88-2.701 15.701.107l343.749 203.136c4.761 2.823 7.675 7.935 7.675 13.459s-2.914 10.636-7.675 13.459l-343.749 203.135c-2.457 1.435-5.204 2.167-7.95 2.166zm15.625-394.521v351.521l297.409-175.76z"/></svg>
              </i></a>
              <figure>
                <img alt="img" src="https://via.placeholder.com/1070x510">
              </figure>
            </div>
            <div class="share-post-icon">
              <h6>share post:</h6>
              <ul class="social-media-icon full">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook-f icon"></i>    </a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-g icon"></i></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </section> --}}

@endsection
