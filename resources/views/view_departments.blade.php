@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Departments</h3></div>
              <div class="card-body">
                <div class="table-bordered" style="background-color:#FFFFFF">
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
