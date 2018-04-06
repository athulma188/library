@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Add Employee</h3></div>
              <div class="panel-body">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                  {{$error}}
                </div>
                @endforeach
                @if(session('success'))
                  <div class="alert alert-success">
                    {{session('success')}}
                  </div>
                @endif
                  <form action="/employees/add" method="post" class="form">
                      {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="name">Name:</label>
                               <input name="name" type="text" class="form-control" id="name" required>
                              </div>

                              <div class="form-group">
                                  <label for="gender">Gender:</label>
                                  <select name="gender" class="form-control" id="gender" required>
                                  <option disabled selected value> -- select a gender -- </option>
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Others</option>
                                  </select>
                              </div>

                              <div class="form-group">
                               <label for="salary">Salary:</label>
                               <input name="salary" type="number" class="form-control" id="salary" required>
                              </div>

                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="dob">Date of Birth:</label>
                               <input type="date" name="date_of_birth" class="form-control" required>
                              </div>

                              <div class="form-group">
                               <label for="email">Email:</label>
                               <input type="email" class="form-control" id="email" name="email" required>
                              </div>

                              <div class="form-group">
                               <label for="phone_number">Phone Number:</label>
                               <input type="number" class="form-control" id="phone_number" name="phone_number">
                              </div>

                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Employee</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
