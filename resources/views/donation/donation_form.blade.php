@extends('layouts.app')
@section('content')

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
          <input type="submit" class="give-submit" name="give-purchase" value="Save">
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


@endsection
