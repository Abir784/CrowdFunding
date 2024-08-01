@extends('layouts.dashboard')
@section('dash_contents')
<div class="card">
    <div class="card-header">
        <b>
            Create article
        </b>
        <div class="card-body">
             @if (session('success'))
               <div class="alert alert-success">
                 <strong>{{session('success')}}</strong>
               </div>

             @endif
            <form action="{{route("article.form.post")}}" method="POST" enctype="multipart/form-data">

            @csrf
                <div class="row gy-3">
                    <div class="col-12">
                      <label class="form-label">Title</label>
                      <input type="text"  class="form-control" placeholder="Enter The Title" name="title">
                    </div>
                    @error('title')
                        <span class="alert" role="alert">
                            <strong class="alert alert-danger">{{ $message }}</strong>
                        </span>
                   @enderror
                    <div class="col-12">
                      <label class="form-label">Short Title(shown in the main page)</label>
                      <input type="text" name="short_title" class="form-control" placeholder="Enter Short Title">
                    </div>
                        @error('short_title')
                        <span class="alert" role="alert">
                            <strong class="alert alert-danger">{{ $message }}</strong>
                        </span>
                        @enderror
                    <div class="col-12">
                      <label class="form-label">Quote</label>
                      <input type="text" name="quote" class="form-control" placeholder="Enter quote">
                    </div>
                    @error('quote')
                    <span class="alert" role="alert">
                        <strong class="alert alert-danger">{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="col-12">
                      <label class="form-label">Description</label>
                      <textarea name="description" class="form-control" rows="4" cols="50" placeholder="Enter a description..."></textarea>
                    </div>
                    @error('description')
                    <span class="alert" role="alert">
                        <strong class="alert alert-danger">{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Large Poster Image(shown in the details page)</label>
                      <input class="form-control" type="file" name="poster_image_1">
                    </div>
                    @error('poster_image_1')
                    <span class="alert" role="alert">
                        <strong class="alert alert-danger">{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="col-12">
                      <label class="form-label">Short Poster Image(Shown in the main page)</label>
                      <input class="form-control" type="file" name="poster_image_2">
                    </div>
                    @error('poster_image_2')
                    <span class="alert" role="alert">
                        <strong class="alert alert-danger">{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="col-12">
                      <button type="submit" class="btn btn-primary-600">Submit</button>
                    </div>
                  </div>
            </form>

        </div>
    </div>
</div>

@endsection

