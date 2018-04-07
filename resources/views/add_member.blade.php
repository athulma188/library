@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
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
              <div class="card-heading" align=center><h3>Add Member</h3></div>
              <div class="card-body">
                  <form action="/members/add" method="post" class="form">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="name">Name:</label>
                               <input type="text" class="form-control" id="name" name="name" required>
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
                               <label for="category">Category:</label>
                               <select name="category" class="form-control" id="category" required>
                               <option disabled selected value> -- select a category -- </option>
                               <option>Student</option>
                               <option>Professor</option>
                               </select>
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
                               <label for="phone">Phone Number:</label>
                               <input type="number" class="form-control" id="phone" name="phone">
                              </div>

                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Member</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
