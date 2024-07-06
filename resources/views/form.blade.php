<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{url('/')}}/register" method="post">
    @csrf
    <div class = "container">
        <h1 class = "text-center">Individual Profile</h1>
        <div class="form-check">
          <label class="form-check-label"> Name </label>
            <input type="text" class="form-control" name="name" id="" value="" checked>
            <span class="text-danger">
                @error('name')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-check">
          <label class="form-check-label"> Email </label>
            <input type="email" class="form-control" name="email" id="" value="" checked>
            <span class="text-danger">
                @error('email')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-check">
          <label class="form-check-label"> Password </label>
            <input type="password" class="form-control" name="" id="" value="" checked>
            <span class="text-danger">
                @error('password')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-check">
          <label class="form-check-label"> Address </label>
            <input type="address" class="form-control" name="address" id="" value="" checked>
            <span class="text-danger">
                @error('address')
                    {{$message}}
                @enderror
            </span>
        </div>
        <div class="form-check">
          <label class="form-check-label"> Phone Number </label>
            <input type="text" class="form-control" name="phone_no" id="" value="" checked>
            <span class="text-danger">
                @error('phone_no')
                    {{$message}}
                @enderror
            </span>
        </div>
        <button class="btn btn-primary ml-4 mt-3">
            Submit
        </button>

    </div>
    </form>


  </body>
</html>
