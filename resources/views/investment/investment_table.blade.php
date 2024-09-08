@extends('layouts.dashboard')
@section('dash_contents')

<body>
    <div class="card basic-data-table">
      <div class="card-body">
        <table class="table table-warning table-striped-columns" id="dataTable" data-page-length='20'>
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
              <th scope="col">Invested Amount</th>

            </tr>
          </thead>


          <tbody>
            @foreach($investment as $SL=>$investment)
            <tr>
              <td>{{  $SL+1}}</td>
              <td>{{$investment->campaign->title}}</td>
              <td>{{$investment->investment_amount}}</td>

            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
@endsection
