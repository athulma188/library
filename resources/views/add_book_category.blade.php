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
              <div class="panel-heading"><h3>Add Book Category</h3></div>
              <div class="panel-body">
                  <form action="/book_category/add" method="post" class="form">
                      {{ csrf_field() }}
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="category">Name:</label>
                               <input type="text" class="form-control" id="category" name="name" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="ref_copies">No of Reference Copies:</label>
                               <input type="number" class="form-control" id="ref_copies" name="ref_copies" required>
                              </div>
                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Book Category</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
