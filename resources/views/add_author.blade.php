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
              <div class="panel-heading"><h3>Add Author</h3></div>
              <div class="panel-body">
                  <form action="/authors/add" method="post" class="form">
                      {{ csrf_field() }}
                      <div class='row'>
                          <div class="col-md-12">
                              <div class="form-group">
                               <label for="name">Name:</label>
                               <input name="name" type="text" class="form-control" id="name" required>
                              </div>
                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Author</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
