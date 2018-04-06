@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Departments</h3></div>
              <div class="panel-body">
                <div class="table-responsive" style="background-color:#FFFFFF">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Department Name</th>
                            <th>Total No of Books</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($departments as $department)
                          <tr>
                              <td> {{$department->dept_id}} </td>
                              <td> {{$department->name}} </td>
                              <td> {{$department->total_no_of_books}} </td>
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
