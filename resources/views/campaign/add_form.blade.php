@extends('layouts.dashboard')
@section('dash_contents')
<div class="card">
    <div class="card-header">
        <b>
            Create Campaign
        </b>
        <div class="card-body">
             @if (session('success'))
               <div class="alert alert-success">
                 <strong>{{session('success')}}</strong>
               </div>
             @endif

            <form action="{{ route('campaign.form.post')}}" method="POST" enctype="multipart/form-data" class="table table-striped-rows">
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
                      <label class="form-label">Goal</label>
                      <input type="number" name="goal" class="form-control" placeholder="Enter Goal">
                    </div>
                    @error('goal')
                    <span class="alert" role="alert">
                        <strong class="alert alert-danger">{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="col-12">
                      <label class="form-label">Campaign Type</label>
                      <div class="input-group">
                        <select class="form-select w-120-px" name="type" id="type">
                          <option value="">--Select Type--</option>
                          <option value="1">Investment</option>
                          <option value="2">Donation</option>
                        </select>
                      </div>
                    </div>
                    @error('type')
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
                      <input class="form-control" type="file" name="poster_image">
                    </div>
                    @error('poster_image')
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
                    <div id="dilute" class="col-12">

                    </div>



                    <div class="col-12">
                      <button type="submit" class="btn btn-primary-600">Submit</button>
                    </div>
                  </div>
            </form>

        </div>
    </div>
</div>

@endsection
@section('footer_script')



<script>
    $('#type').change(function(){
        var type = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     $.ajax({
        type:'POST',
        url:'/GetField',
        data:{'type':type},
        success:function(data){
            $('#dilute').html(data);
        }

    });

})

</script>

@endsection
