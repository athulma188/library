@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Holds</h3></div>
              <div class="card-body">
                <div class="table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Book ID</th>
                            <th>Member ID</th>
                            <th>Hold Date</th>
                            <th>status</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($holds as $hold)
                          <tr>
                              <td> {{$hold->book_id}} </td>
                              <td> {{$hold->member_id}} </td>
                              <td> {{date('d/m/Y',strtotime($hold->hold_date))}} </td>
                              <td> {{$hold->status}} </td>
                          </tr>
                         @endforeach
                   </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
