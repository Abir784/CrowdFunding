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

              <th scope="col">Title</th>
              <th scope="col">Short title</th>
              <th scope="col">added by</th>
              <th scope="col">quote</th>
            </tr>
          </thead>


          <tbody>
            @foreach($articles as $SL=>$article)
            <tr>
              <td>{{  $SL+1}}</td>
              <td>{{$article->title}}</td>
              <td>{{$article->short_title}}</td>
              <td>{{$article->posted_by->name}}</td>
              <td>{{$article->quote}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
@endsection
