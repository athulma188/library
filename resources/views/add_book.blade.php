@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Add Book</h3></div>
              <div class="panel-body">
                  <form action="/action_page.php">
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="title">Title:</label>
                               <input type="text" class="form-control" id="title">
                              </div>

                              <div class="form-group">
                               <label for="isbn">ISBN:</label>
                               <input type="text" class="form-control" id="isbn">
                              </div>

                              <div class="form-group">
                               <label for="publisher">Publisher:</label>
                               <input type="text" class="form-control" id="publisher">
                              </div>

                              <div class="form-group">
                               <label for="category">Category:</label>
                               <input type="text" class="form-control" id="category">
                              </div>

                              <div class="form-group">
                               <label for="date_of_pur">Date of Purchase:</label>
                               <input type="date" class="form-control" id="date_of_pur" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="edit_no">Edition No:</label>
                               <input type="number" class="form-control" id="edit_no">
                              </div>

                              <div class="form-group">
                               <label for="genre">Genre:</label>
                               <input type="text" class="form-control" id="genre">
                              </div>

                              <div class="form-group">
                               <label for="edition">Edition:</label>
                               <input type="text" class="form-control" id="edition">
                              </div>

                              <div class="form-group">
                               <label for="copies">No of Copies:</label>
                               <input type="number" class="form-control" id="copies" min=1>
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
