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
<section>
  <div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            <strong>{{session('success')}}</strong>
        </div>

    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            <strong>{{session('error')}}</strong>
        </div>

    @endif
    <form action="{{route('donation.form.post')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h5 align="center" class="mt-5">Enter your billing information</h5>
      <div class="enter-your-information pt-5">
        <div class="col-lg-6">
          <input type="hidden" name="campaign_id" value="{{$campaign_id}}">
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <label>Email Address</label>
          <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Enter Valid Email">
          @error('email')
                <span class="alert" role="alert">
                    <strong class="alert alert-danger">{{ $message }}</strong>
                </span>
          @enderror

          <label>Full Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Enter Full Name">
          @error('name')
                <span class="alert" role="alert">
                    <strong class="alert alert-danger">{{ $message }}</strong>
                </span>
          @enderror

          <label>City</label>
          <input type="text" name="city">
          @error('city')
                <span class="alert" role="alert">
                    <strong class="alert alert-danger">{{ $message }}</strong>
                </span>
          @enderror
          </div>
          <div class="col-lg-6 m-2">

            <label>Donation Amount</label>
            <input type="number" name="donation_amount">
            @error('donation_amount')
                  <span class="alert" role="alert">
                      <strong class="alert alert-danger">{{ $message }}</strong>
                  </span>
            @enderror
            <label>State / Zipcode</label>
            <div class="d-flex">

              <input type="text" name="zipcode" placeholder="Zipcode">
              @error('zipcode')
                  <span class="alert" role="alert">
                      <strong class="alert alert-danger">{{ $message }}</strong>
                  </span>
              @enderror

          </div>

          <div class="pt-5">
              <button type="submit" class="btn btn-primary-600">Save</button>
          </div>


    </form>

  </div>
</section>


@endsection
