@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-default">
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
              <div class="panel-heading"><h3>Add Department</h3></div>
              <div class="panel-body">
                  <form action="/departments/add" class="form" method="post">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-12">
                              <div class="form-group">
                               <label for="name">Department Name:</label>
                               <input type="text" class="form-control" id="name" name="name" required>
                              </div>
                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Department</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
