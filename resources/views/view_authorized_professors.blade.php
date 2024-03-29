@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Authorized Professors</h3></div>
              <div class="card-body">
                <div class="table-bordered" style="background-color:#FFFFFF">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Department ID</th>
                            <th>Professor ID</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($profs as $prof)
                          <tr>
                              <td> {{$prof->dept_id}} </td>
                              <td> {{$prof->prof_id}} </td>
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
