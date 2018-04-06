@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Members</h3></div>
              <div class="panel-body">
                <div class="table-responsive" style="background-color:#FFFFFF">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Member ID</th>
                            <th>Department ID</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($profs as $prof)
                          <tr>
                              <td> {{$prof->prof_id}} </td>
                              <td> {{$names[$prof->member_id]}} </td>
                              <td> {{$prof->member_id}} </td>
                              <td> {{$prof->dept_id}} </td>
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
