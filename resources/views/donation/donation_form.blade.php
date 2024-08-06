@extends('layouts.app')
@section('content')

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
