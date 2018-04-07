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
              <div class="card-heading" align=center><h3>Add Book</h3></div>
              <div class="card-body">
                  <form action="/books/add" method="post" class="form">
                      {{ csrf_field() }}
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="title">Title:</label>
                               <input type="text" class="form-control" id="title" name="title" required>
                              </div>

                              <div class="form-group">
                               <label for="isbn">ISBN:</label>
                               <input type="text" class="form-control" id="isbn" name="isbn" required>
                              </div>

                              <div class="form-group">
                               <label for="publisher">Publisher:</label>
                               <input type="text" class="form-control" id="publisher" name="publisher" required>
                              </div>

                              <div class="form-group">
                               <label for="category">Category:</label>
                               <input type="text" class="form-control" id="category" name="category" required>
                              </div>

                              <div class="form-group">
                               <label for="date_of_pur">Date of Purchase:</label>
                               <input type="date" class="form-control" id="date_of_pur" name="date_of_pur" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="edit_no">Edition No:</label>
                               <input type="number" class="form-control" id="edit_no" name="edit_no">
                              </div>

                              <div class="form-group">
                               <label for="genre">Genre:</label>
                               <input type="text" class="form-control" id="genre" name="genre">
                              </div>

                              <div class="form-group">
                               <label for="edition">Edition:</label>
                               <input type="text" class="form-control" id="edition" name="edition">
                              </div>

                              <div class="form-group">
                               <label for="copies">No of Copies:</label>
                               <input type="number" class="form-control" id="copies" min=1 name="copies" required>
                              </div>
                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Book</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
