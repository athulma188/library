  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Add Member Category</h3></div>
              <div class="panel-body">
                  <form action="/action_page.php">
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="category">Category Name:</label>
                               <input type="text" class="form-control" id="category">
                              </div>

                              <div class="form-group">
                               <label for="borrow_dur">Borrow Duration(Days):</label>
                               <input type="number" class="form-control" id="borrow_dur" min=0>
                              </div>

                              <div class="form-group">
                               <label for="hold_exp">Hold Expiry(Days):</label>
                               <input type="number" class="form-control" id="hold_exp" min=0>
                              </div>

                              <div class="form-group">
                               <label for="renew_limit">Renew Limit:</label>
                               <input type="number" class="form-control" id="renew_limit" min=0>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="perday_fine">Per Day Fine:</label>
                                <input type="number" step=0.01 class="form-control" id="perday_fine" min=0>
                              </div>

                              <div class="form-group">
                               <label for="borrow_limit">Borrow Limit:</label>
                               <input type="number" class="form-control" id="borrow_limit" min=0>
                              </div>

                              <div class="form-group">
                               <label for="hold_limit">Hold Limit:</label>
                               <input type="number" class="form-control" id="hold_limit" min=0>
                              </div>
                          </div>
                      </div>

                      <button type="submit" style="float:right" class="btn btn-default">Add Member Category</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
