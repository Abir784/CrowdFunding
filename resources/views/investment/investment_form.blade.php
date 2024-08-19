@extends('layouts.app')
@section('content')

<section class="page-title-area" style="background-image:url(https://via.placeholder.com/1920x430)">
  <div class="container">
    <div class="title-area-data">
      <h2>Start Investment</h2>
      <p>Organisations committed to ending poverty worldwide.</p>
    </div>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
        <li class="breadcrumb-item active" aria-current="page">Investment</li>
    </ol>
  </div>
</section>
<section class="gap">
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

    <form action="{{route('investment.form.post')}}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="enter-your-information pt-5">
        <div class="enter-your-information-data">
          <h5>Enter your billing information</h5>
          <input type="hidden" name="campaign_id" value="{{$campaign_id}}">
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
          <label>Email Address</label>
          <input type="text" name="email" value="{{Auth::user()->email}}" placeholder="Enter Valid Email">

          <label>Full Name</label>
          <input type="text" name="name" value="{{Auth::user()->name}}" placeholder="Enter Full Name">

          <label>City</label>
          <input type="text" name="city">
          <label>Investment Amount</label>
          <input type="number" name="investment_amount">
          <label>State / Zipcode</label>
          <div class="d-flex">
            <select class="nice-select Advice">
              <option>State</option>
              <option>State Topic 1</option>
              <option>State Topic 2</option>
              <option>State Topic 3</option>
              <option>State Topic 4</option>
            </select>
            <input type="text" name="zipcode" placeholder="Zipcode">
          </div>

        <div class="pt-5">
          <button type="submit" class="btn btn-primary-600">Save</button>
        </div>
    </form>
    <form>

        </div>
      </div>
    </form>
  </div>
</section>


@endsection
