@extends('layouts.dashboard')
@section('dash_contents')

<body>
    <div class="card basic-data-table">
      <div class="card-body">
        <table class="table bordered-table mb-0" id="dataTable" data-page-length='20'>
          <thead>
            <tr>
              <th scope="col">
                <div class="form-check style-check d-flex align-items-center">
                  <label class="form-check-label">
                    S.L
                  </label>
                </div>
              </th>

              <th scope="col">Campaign Title</th>
              <th scope="col">Goal Amount</th>
              <th scope="col">Goal Raised</th>
              <th scope="col">Campaign Type</th>
              <th scope="col">Dilution(If Any)</th>
              <th scope="col">Status</th>
            </tr>
          </thead>


          <tbody>
            @foreach($campaigns as $SL=>$campaign)
            <tr>
              <td>{{  $SL+1}}</td>
              <td>{{$campaign->title}}</td>
              <td>{{$campaign->goal}}</td>
              <td>{{$campaign->goal_raised}}</td>
              @if ($campaign->type ==1)
              <td>Donation</td>
              @else
              <td>Investment</td>
              @endif
              <td>{{$campaign->dilution}}</td>
              @if ($campaign->goal_raised == $campaign->goal)
                 <td>Fundraise Complete</td>

                 @else
                 <td>Funraise Ongoing</td>

              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
@endsection
