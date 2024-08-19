@extends('layouts.app')
@section('content')
<section class="page-title-area">
    <div class="container">
        <div class="title-area-data">
          <h2>All Campaigns</h2>
          <p>All trusted Campaigns to donate or invest</p>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Home</a>
          </li>
            <li class="breadcrumb-item active" aria-current="page">Campaigns</li>
        </ol>
    </div>
 </section>
 <section class="gap">


    <div class="container">
        <div class="row mb-4">
            <div class="col-md-8">
                <form action="#" method="GET">
                    <input type="text" name="search" class="form-control" placeholder="Search campaigns..." value="">
                </form>
            </div>
            <div class="col-md-4">
                <select class="form-control" name="filter">
                    <option value="">Filter by</option>
                    <option value="latest" >Latest</option>
                    <option value="oldest" >Oldest</option>
                    <option value="popular" >Most Popular</option>
                    <option value="investment" >Investment</option>
                    <option value="investment" >Donation</option>
                </select>
            </div>
        </div>
        <div class="row" id="filter_search">
            @forelse ($campaigns as $campaign )

            <div class="col-xl-4 col-md-6 ">
                <div class="news-article-one">
                  <img alt="news article img" src="{{asset('uploads/campaign/Small_poster/'.$campaign->poster_image_2)}}">
                  <a href="{{route('campaign.details',$campaign->id)}}"><h6>{{$campaign->created_at->format('M-d,Y')}}</h6></a>

                  <a href="{{route('campaign.details',$campaign->id)}}"><h3>The perfect way to end your campaign</h3></a>
                </div>
            </div>
            @empty
            Nothing to Show

            @endforelse

         </div>
    </div>
 </section>

@endsection
@section('app_footer')

<script>
    $('#filter_search').change(function(){
        var type = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     $.ajax({
        type:'POST',
        url:'/search_post',
        data:{'type':type},
        success:function(data){
            $('#row').html(data);
        }

    });

})

</script>
@endsection
