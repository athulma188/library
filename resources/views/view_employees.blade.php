@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Employees</h3></div>
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
                            <th>Salary</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($employees as $employee)
                          <tr>
                              <td> {{$employee->employee_id}} </td>
                              <td> {{$employee->name}} </td>
                              <td> {{$employee->gender}} </td>
                              <td> {{date('d/m/Y',strtotime($employee->date_of_birth))}} </td>
                              <td> {{$employee->email}} </td>
                              <td> {{$employee->phone_number}} </td>
                              <td> {{$employee->salary}} </td>
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
