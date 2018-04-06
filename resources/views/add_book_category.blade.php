@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Add Book Category</h3></div>
              <div class="panel-body">
                  <form action="/action_page.php">
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="category">Name:</label>
                               <input type="text" class="form-control" id="category">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="ref_copies">No of Reference Copies:</label>
                               <input type="number" class="form-control" id="ref_copies">
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
