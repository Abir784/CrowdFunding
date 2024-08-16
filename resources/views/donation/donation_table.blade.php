@extends('layouts.dashboard')
@section('dash_contents')

<body>
    <div class="card basic-data-table">
      <div class="card-header">
        <h5 class="card-title mb-0">Default Datatables</h5>
      </div>
      <div class="card-body">
        <table class="table bordered-table mb-0" id="dataTable" data-page-length='20'>
          <thead>
            <tr>

              <th scope="col">
                <div class="form-check style-check d-flex align-items-center">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">
                    S.L
                  </label>
                </div>
              </th>

              <th scope="col">Campaign Title</th>
              <th scope="col">Donated Amount</th>
              <th scope="col">Payment Status</th>

            </tr>
          </thead>


          <tbody>
            @foreach($donations as $SL=>$donation)
            <tr>
              <td>{{  $SL+1}}</td>
              <td>{{$donation->campaign->title}}</td>
              <td>{{$donation->donation_amount}}</td>
              @if($donation->payment_status==0)
                <td><span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">unpaid</span></td>
              @else
                <td> <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">paid</span></td>
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
