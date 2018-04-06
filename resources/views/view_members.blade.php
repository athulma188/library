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
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Email</th>
                            <th>Phone Number</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($members as $member)
                          <tr>
                              <td> {{$member->member_id}} </td>
                              <td> {{$member->name}} </td>
                              <td> {{$member->gender}} </td>
                              <td> {{date('d/m/Y',strtotime($member->date_of_birth))}} </td>
                              <td> {{$member->email}} </td>
                              <td> {{$member->phone_number}} </td>
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
