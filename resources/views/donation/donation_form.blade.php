@extends('layouts.dashboard')
@section('dash_contents')

<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphan - Donation Page</title>
  <link rel="icon" href="assets/img/logo-icon.png">

   <!-- CSS only -->
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <!-- Font Awesome 6 -->
   <link rel="stylesheet" href="assets/css/fontawesome.min.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <!-- style -->
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/style-dark.css">
   <!-- responsive -->
   <link rel="stylesheet" href="assets/css/responsive.css">
   <!-- color -->
   <link rel="stylesheet" href="assets/css/color.css">
 </head>
<body>
  <div class="preloader">
    <div class="sec-loading">
      <div class="one">
      </div>
    </div>
  </div>
<!-- theme color -->
    <div class="theme-color">
      <img src="assets/img/sun.png" alt="moon" id="theme-icon">
    </div>
  <!-- theme color end -->
<header>
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-slid">
        <div>
          <div class="phone-data">
            <div class="phone d-flax align-items-center">
              <i>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M437.15,74.817C388.895,26.571,324.561,0,256,0C187.587,0,123.279,26.65,74.92,75.041
                      C26.559,123.435-0.048,187.766,0,256.184c0.048,68.507,27.005,132.938,75.905,181.425C124.335,485.629,188.219,512,255.997,512
                      c0.677,0,1.357-0.002,2.035-0.008c44.288-0.345,87.858-12.192,126.001-34.262l-15.024-25.967
                      c-33.653,19.472-72.109,29.925-111.21,30.23c-60.48,0.456-117.575-22.858-160.77-65.688C53.847,373.49,30.043,316.616,30,256.163
                      C29.958,195.762,53.447,138.97,96.141,96.247C138.832,53.527,195.605,30,256,30c124.595,0,225.979,101.365,226,225.959
                      c0.008,49.387-15.621,96.298-45.198,135.661c-2.573,3.424-6.37,5.478-10.692,5.784c-4.368,0.308-8.658-1.291-11.756-4.388
                      l-20.406-20.406l9.06-9.06l-70.711-70.711l-28.284,28.284c-58.885-7.935-105.202-54.252-113.137-113.137l28.284-28.284
                      l-70.711-70.711l-39.054,39.054c-3.826,66.249,19.552,133.776,70.167,184.391s118.142,73.993,184.391,70.167l8.782-8.781
                      l20.406,20.406c9.247,9.247,22.033,14.022,35.082,13.1c12.935-0.913,24.803-7.36,32.563-17.688
                      C494.3,365.039,512.01,311.895,512,255.954C511.988,187.393,485.406,123.064,437.15,74.817z"/>
                </svg>
              </i>
              <span>Phone:</span><a class="me-3" href="callto:800-836-4620">800-836-4620</a>
            </div>
            <div class="phone">
              <i>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                   M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z"
                  />
                </svg>
              </i>
              <span>Email:</span><a href="mallto:information@domain.com">information@domain.com</a>
            </div>
          </div>
        </div>
        <div>
          <div class="social-media">
            <ul class="social-media-icon">
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
            <div class="mx-4 boder"></div>
            <div class="login">
                <i class="fa-solid fa-user"></i>
                <a href="#">Login and Register</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="second-bar">
    <div class="container">
      <div class="logo-menu">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <div class="logo">
              <a href="index.html">
                <img alt="logo" src="assets/img/logo.png" class="white-logo">
                <img alt="logo" src="assets/img/logo-w.png" class="black-logo">
              </a>
            </div>
          </div>
          <div class="col-lg-9">
          <div class="nav-bar">
            <nav>
              <ul>
                <li><a href="JavaScript:void(0)">home</a>
                <ul>
                    <li><a href="index.html">home page 1</a></li>
                    <li><a href="index-2.html">home page 2</a></li>
                    <li><a href="index-3.html">home page 3</a></li>
                    <li><a href="index-4.html">home page 4</a></li>
                </ul>
                </li>
                <li><a href="JavaScript:void(0)">Causes</a>
                <ul>
                    <li><a href="cause-details.html">cause details</a></li>
                </ul>
                </li>
                <li><a href="JavaScript:void(0)">Pages</a>
                <ul>
                    <li><a href="team-details.html">team details</a></li>
                    <li><a href="event-details.html">event details</a></li>
                    <li><a href="product-details.html">product-details</a></li>
                    <li><a href="donation-page.html">donation page</a></li>
                    <li><a href="JavaScript:void(0)">photo-gallery</a>
                      <ul>
                          <li><a href="photo-gallery-1.html">photo gallery 1</a></li>
                          <li><a href="photo-gallery-2.html">photo gallery 2</a></li>
                          <li><a href="photo-gallery-3.html">photo gallery 3</a></li>
                      </ul>
                    </li>
                    <li><a href="404-error.html">404 error</a></li>
                </ul>
                </li>
                <li><a href="JavaScript:void(0)">shop</a>
                  <ul>
                    <li><a href="our-shop.html">our shop</a></li>
                    <li><a href="shop-cart.html">shop cart</a></li>
                    <li><a href="cart-checkout.html">cart checkout</a></li>
                  </ul>
                </li>
                <li><a href="JavaScript:void(0)">News</a>
                  <ul>
                    <li><a href="blog-details-1.html">blog details 1</a></li>
                    <li><a href="blog-details-2.html">blog details 2</a></li>
                  </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>

              </ul>
          </nav>
          < class="extras">
            <div class="donation">

                <a href="JavaScript:void(0)" class="pr-cart">

                  <svg id="Shoping-bags" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z"></path></g></svg>

                </a>

                <div class="cart-popup">

                    <ul>

                      <li class="d-flex align-items-center position-relative">

                        <div class="p-img light-bg">

                          <img src="assets/img/product-1.jpg" alt="Product Image">

                        </div>

                        <div class="p-data">

                          <h3 class="font-semi-bold">Pastoral Principles Cards</h3>

                          <p class="theme-clr font-semi-bold">1 x $25.00</p>

                        </div>

                        <a href="JavaScript:void(0)" id="crosss"></a>

                      </li>

                      <li class="d-flex align-items-center position-relative">

                        <div class="p-img light-bg">

                          <img src="assets/img/product-2.jpg" alt="Product Image">

                        </div>

                        <div class="p-data">

                          <h3 class="font-semi-bold">Pastoral Principles Cards</h3>

                          <p class="theme-clr font-semi-bold">1 x $25.00</p>

                        </div>

                        <a href="JavaScript:void(0)" id="cross"></a>

                      </li>

                    </ul>

                      <div class="cart-total d-flex align-items-center justify-content-between">

                        <span class="font-semi-bold">Total:</span>

                        <span class="font-semi-bold">$60.00</span>

                      </div>

                      <div class="cart-btns d-flex align-items-center justify-content-between">

                        <a class="font-bold" href="JavaScript:void">View Cart</a>

                        <a class="font-bold theme-bg-clr text-white checkout" href="JavaScript:void">Checkout</a>

                      </div>

                </div>

              </div>
                <!--<a href="{{ route('campaign.details',$campaign->id)}}">
                <a class="theme-btn" href="donation-page.html">Donate Now</a> -->

                <a href="{{ route('donation.form',$donation->id)}}">Donate Now</a>

            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="responsive-bar">
    <div class="container">
      <div class="responsive-bar-slider">
        <a href="index.html">
          <img alt="logo" src="assets/img/logo.png" class="white-logo">
           <img alt="logo" src="assets/img/logo-w.png" class="black-logo">
        </a>
        <div class="bar-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
  <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
      <div class="res-log">
        <a href="index.html">
          <img src="assets/img/logo.png" alt="Responsive Logo" class="white-logo">
          <img alt="logo" src="assets/img/logo-w.png" class="black-logo">
        </a>
      </div>
        <ul>

          <li class="menu-item-has-children"><a href="JavaScript:void(0)">Home</a>
            <ul class="sub-menu">

              <li><a href="index.html">home page 1</a></li>
              <li><a href="index-2.html">home page 2</a></li>
              <li><a href="index-3.html">home page 3</a></li>
              <li><a href="index-4.html">home page 4</a></li>
            </ul>
          </li>
          <li><a href="about.html">About Us</a></li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">Pages</a>
            <ul class="sub-menu">
              <li><a href="cause-details.html">cause details</a></li>
              <li><a href="team-details.html">team details</a></li>
                    <li><a href="event-details.html">event details</a></li>
                    <li><a href="donation-page.html">donation page</a></li>
                    <li><a href="product-details.html">product details</a></li>
                    <li><a href="404-error.html">404 error</a></li>
            </ul>
          </li>


          <li class="menu-item-has-children"><a href="JavaScript:void(0)">shop</a>

          <ul class="sub-menu">

            <li><a href="our-shop.html">our shop</a></li>
                    <li><a href="shop-cart.html">shop cart</a></li>
                    <li><a href="cart-checkout.html">cart checkout</a></li>
          </ul>

          </li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">News</a>

          <ul class="sub-menu">

           <li><a href="blog-details-1.html">blog details 1</a></li>
                    <li><a href="blog-details-2.html">blog details 2</a></li>
          </ul>

          </li>
          <li class="menu-item-has-children"><a href="JavaScript:void(0)">photo gallery</a>

          <ul class="sub-menu">

           <li><a href="photo-gallery-1.html">photo gallery 1</a></li>
            <li><a href="photo-gallery-2.html">photo gallery 2</a></li>
            <li><a href="photo-gallery-3.html">photo gallery 3</a></li>
          </ul>

          </li>

          <li><a href="contact.html">contacts</a></li>

          </ul>

          <a href="JavaScript:void(0)" id="res-cross"></a>
  </div>
</header>
<section class="page-title-area" style="background-image:url(https://via.placeholder.com/1920x430)">
  <div class="container">
    <div class="title-area-data">
      <h2>Start Donation</h2>
      <p>Organisations committed to ending poverty worldwide.</p>
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
        <li class="breadcrumb-item active" aria-current="page">Donation</li>
    </ol>
  </div>
</section>
<section class="gap">
  <div class="container">

    <form action="{{route('donation.form.post')}}" method="post" enctype="multipart/form-data">
    @csrf
          <h5>Now choose how much.</h5>
      <ul class="give-donation-levels-wrap">
              <li><button type="button" class="give-donation-level-btn">$10</button>
              </li>
              <li><button type="button" class="give-donation-level-btn">$20</button>
              </li>
              <li><button type="button" class="give-donation-level-btn">$30</button>
              </li>
              <li><button type="button" class="give-donation-level-btn">$40</button>
              </li>
              <li><button type="button" class="give-btn give-btn-level-custom" value="custom">Custom Amount</button></li>
      </ul>
      <div class="enter-your-information pt-5">
        <div class="enter-your-information-data">
          <h5>Enter your billing information</h5>
          <label>Email Address</label>
          <input type="text" name="Email">
          <label>Full Name</label>
          <input type="text" name="name">
          <label>City</label>
          <input type="text" name="city">
          <label>State / Zidcode</label>
          <div class="d-flex">
            <select class="nice-select Advice">
              <option>State</option>
              <option>State Topic 1</option>
              <option>State Topic 2</option>
              <option>State Topic 3</option>
              <option>State Topic 4</option>
            </select>
            <input type="text" name="zidcode" placeholder="Zipcode">
          </div>
          <input type="submit" class="give-submit" name="give-purchase" value="Donate Now">
        </div>
        <div class="enter-your-information-data payment">
          <h5>Enter Your Payment Information</h5>
          <label>Select Method</label>
          <div class="radio-to mb-5">
            <input type="radio" id="visa" name="fav_language" value="visa">
            <label for="visa">
            <img alt="visa" src="assets/img/visa.jpg">
            </label>
            <input type="radio" id="PayPal" name="fav_language" value="PayPal">
            <label for="PayPal">
            <img alt="img" src="assets/img/visa-2.jpg">
            </label>
          </div>
          <label>Credit Card Number</label>
          <input type="number" name="Email">
          <label>Expiration Date</label>
          <input type="number" name="name">
          <label>Expiration Date</label>
          <div class="d-flex">
            <div class="time-number">
            <select class="nice-select Advice">
              <option>Month</option>
              <option>State Topic 1</option>
              <option>State Topic 2</option>
              <option>State Topic 3</option>
              <option>State Topic 4</option>
            </select>
            </div>
            <div class="time-number ms-md-2">
              <select class="nice-select Advice">
                <option>Year</option>
                <option>State Topic 1</option>
                <option>State Topic 2</option>
                <option>State Topic 3</option>
                <option>State Topic 4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- footer -->
  <footer class="footer-one" style="background-image: url(https://via.placeholder.com/1920x822);">
    <div class="footer-top-bar gap">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-4 col-md-6">
            <div class="footer-logo-one">
              <a href="index.html"><img alt="logo" src="assets/img/logo-w.png"></a>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="widget-title">
              <h3 class="m-0">Social Networking</h3>
            </div>
          </div>
          <div class="col-xl-5 col-md-6">
            <ul class="social-media">
                  <li>
                    <a href="#">
                      <i class="fab fa-facebook-f icon"></i>facebook</a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter icon"></i>twitter</a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-google-plus-g icon"></i>google+</a></li>
              </ul>
          </div>
        </div>
        <div class="Information">
          <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="widget-title">
              <h3 class="m-0">Information</h3>
              <p class="pt-4">Lorem ipsum, or lipsum as it is some
                  times  known, is dummy text used in
                  laying out pri nt, graphic or web lirm
                  Lorem ipsum, or lip designs.</p>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="widget-title">
              <h3 class="m-0">Quick Links</h3>
              <ul class="pt-4">
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Our Founder</a></li>
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Multimedia</a></li>
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Education</a></li>
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Governance</a></li>
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Entrepreneurship</a></li>
                <li><i class="fa-solid fa-angle-right"></i><a href="#">Privacy Policy</a></li>
                <li class="pb-0"><i class="fa-solid fa-angle-right"></i><a href="#">Chil Education</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="Information widget-title pt-0 pb-0">
              <h3 class="m-0">Contact info</h3>

            <div class="contact-info mt-4">
              <i>
                <svg height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g id="pin"><path d="m12 22c-.3632813 0-.6972656-.1967773-.8740234-.5141602l-2.3066406-4.1518555c-2.897461-1.2597655-4.819336-4.1606445-4.819336-7.3339843 0-4.4111328 3.5888672-8 8-8s8 3.5888672 8 8c0 3.1733398-1.921875 6.0742188-4.8193359 7.3339844l-2.3066406 4.1518555c-.1767579.3173828-.5107422.5141601-.8740235.5141601zm0-18c-3.3085938 0-6 2.6914063-6 6 0 2.4736328 1.5576172 4.7265625 3.8769531 5.605957.2207031.0839844.4052734.2431641.5195313.4492188l1.6035156 2.8857422 1.6035156-2.8857422c.1142578-.2060547.2988281-.3652344.5195313-.4492188 2.3193359-.8793945 3.8769531-3.1323242 3.8769531-5.605957 0-3.3085937-2.6914062-6-6-6zm0 9c-1.6542969 0-3-1.3457031-3-3s1.3457031-3 3-3 3 1.3457031 3 3-1.3457031 3-3 3zm0-4c-.5517578 0-1 .4487305-1 1s.4482422 1 1 1 1-.4487305 1-1-.4482422-1-1-1z"/></g></svg>
              </i>
              <h5>1199 N. Fairfax St. Suite 300 Alexandria, VA 22314</h5>
            </div>
            <div class="contact-info mt-3">
              <i>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path d="M437.15,74.817C388.895,26.571,324.561,0,256,0C187.587,0,123.279,26.65,74.92,75.041
                      C26.559,123.435-0.048,187.766,0,256.184c0.048,68.507,27.005,132.938,75.905,181.425C124.335,485.629,188.219,512,255.997,512
                      c0.677,0,1.357-0.002,2.035-0.008c44.288-0.345,87.858-12.192,126.001-34.262l-15.024-25.967
                      c-33.653,19.472-72.109,29.925-111.21,30.23c-60.48,0.456-117.575-22.858-160.77-65.688C53.847,373.49,30.043,316.616,30,256.163
                      C29.958,195.762,53.447,138.97,96.141,96.247C138.832,53.527,195.605,30,256,30c124.595,0,225.979,101.365,226,225.959
                      c0.008,49.387-15.621,96.298-45.198,135.661c-2.573,3.424-6.37,5.478-10.692,5.784c-4.368,0.308-8.658-1.291-11.756-4.388
                      l-20.406-20.406l9.06-9.06l-70.711-70.711l-28.284,28.284c-58.885-7.935-105.202-54.252-113.137-113.137l28.284-28.284
                      l-70.711-70.711l-39.054,39.054c-3.826,66.249,19.552,133.776,70.167,184.391s118.142,73.993,184.391,70.167l8.782-8.781
                      l20.406,20.406c9.247,9.247,22.033,14.022,35.082,13.1c12.935-0.913,24.803-7.36,32.563-17.688
                      C494.3,365.039,512.01,311.895,512,255.954C511.988,187.393,485.406,123.064,437.15,74.817z"/>
                </svg>
              </i>
              <h5>Phone:</h5><a href="callto:800-836-4620">800-836-4620</a>
            </div>
            <div class="contact-info mt-3">
              <i>
                <svg height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg"><g data-name="Layer 34"><path d="m30 9v14a3 3 0 0 1 -3 3h-22a3 3 0 0 1 -3-3v-14a2.87 2.87 0 0 1 .19-1l12.15 8.1a3 3 0 0 0 3.32 0l12.15-8.1a2.87 2.87 0 0 1 .19 1zm-13.45 5.43 12-8a3 3 0 0 0 -1.55-.43h-22a3 3 0 0 0 -1.54.44l12 8a1 1 0 0 0 1.09-.01z"/></g></svg>
              </i>
              <h5>Email:</h5><a href="mailto:information@domain.com">information@domain.com</a>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>
    <div class="footer-bootom-bar">
      <div class="container">
        <div class="subscribe">
          <div class="d-flex align-items-center">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                  <path d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                     M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z"
                    />
              </svg>
            <div class="ps-3">
              <h3>Subscribe Newsletter</h3>
              <p>Subscribe Your Email Get New updates and news</p>
            </div>
          </div>
          <form>
            <input type="text" name="email" placeholder="Enter your email address...">
            <button class="btn"><span><i class="fa-regular fa-envelope"></i> Subscribe</span></button>
          </form>
        </div>
        <div class="wpo-lower-footer">
           <p>© 2023 Charity PSD  <i class="fa-solid fa-heart px-2"></i><a href="#"> By Winsfolio</a>, All rights reserved</p>
           <div class="d-flex align-items-center"><a href="#"> Terms of Use</a><div class="mx-4 boder"></div><a href="#">Privacy Policy</a>
           <div class="mx-4 boder"></div> <a href="#">       Disclaimer</a>
          </div>
      </div>
    </div>
    </div>
  </footer>
<!-- footer end -->
<!-- Back to top button -->
  <a id="button"></a>
<!-- Back to top button end -->
<!-- jQuery -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
@endsection
