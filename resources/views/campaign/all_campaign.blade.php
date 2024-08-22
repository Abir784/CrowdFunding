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
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search campaigns..." value="">
                </form>
            </div>
            <div class="col-md-4">
                <form method="POST" action=""><select class="form-control" name="filter" id ="filter">
                    <option value="">Filter by</option>
                    <option value="1" >Latest</option>
                    <option value="2" >Oldest</option>
                    <option value="3" >Investment</option>
                    <option value="4" >Donation</option>
                </select>
                </form>
            </div>
        </div>
        <div class="row" id="filter_search">
            @forelse ($campaigns as $campaign )

            <div class="col-xl-4 col-md-6 ">
                <div class="news-article-one">
                  <img alt="news article img" width="400" height="280" src="{{asset('uploads/campaign/Small_poster/'.$campaign->poster_image_2)}}">
                  <a href="{{route('campaign.details',$campaign->id)}}"><h6>{{$campaign->created_at->format('M-d,Y')}}</h6></a>

                  <a href="{{route('campaign.details',$campaign->id)}}"><h3>{{$campaign->title}}</h3></a>
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
    $('#search').on('keyup',function(){
        var search = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
     $.ajax({
        type:'POST',
        url: "{{ route('search')}}",
        data:{'search':search},
        success:function(data){
            $('#filter_search').html(data);
        }

    });

});

</script>
<script>
    $('#filter').change(function(){
        var type = $(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

     $.ajax({
        type:'POST',
        url:"{{ route('filter')}}",
        data:{'type':type},
        success:function(data){
            $('#filter_search').html(data);
        }

    });

})

</script>
@endsection
