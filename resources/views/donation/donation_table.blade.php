@extends('layouts.dashboard')
@section('dash_contents')

<body>
    <div class="card basic-data-table">
      <div class="card-body">
        <table class="table table-info table-striped-columns" id="dataTable" data-page-length='20'>
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
              <th scope="col">Donated Amount</th>

            </tr>
          </thead>


          <tbody>
            @foreach($donations as $SL=>$donation)
            <tr>
              <td>{{  $SL+1}}</td>
              <td>{{$donation->campaign->title}}</td>
              <td>{{$donation->donation_amount}}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
@endsection
