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
              <div class="panel-heading"><h3>Add Member Category</h3></div>
              <div class="panel-body">
                  <form action="/member_category/add" method="post" class="form">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">
                              <div class="form-group">
                               <label for="category">Category Name:</label>
                               <input type="text" class="form-control" id="category" name="name" required>
                              </div>

                              <div class="form-group">
                               <label for="borrow_dur">Borrow Duration(Days):</label>
                               <input type="number" class="form-control" id="borrow_dur" min=0 name="borrow_dur" required>
                              </div>

                              <div class="form-group">
                               <label for="hold_exp">Hold Expiry(Days):</label>
                               <input type="number" class="form-control" id="hold_exp" min=0 name="hold_exp"required>
                              </div>

                              <div class="form-group">
                               <label for="renew_limit">Renew Limit:</label>
                               <input type="number" class="form-control" id="renew_limit" min=0 name="renew_limit" required>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="perday_fine">Per Day Fine:</label>
                                <input type="number" step=0.01 class="form-control" id="perday_fine" min=0 name="perday_fine" required>
                              </div>

                              <div class="form-group">
                               <label for="borrow_limit">Borrow Limit:</label>
                               <input type="number" class="form-control" id="borrow_limit" min=0 name="borrow_limit" required>
                              </div>

                              <div class="form-group">
                               <label for="hold_limit">Hold Limit:</label>
                               <input type="number" class="form-control" id="hold_limit" min=0 name="hold_limit" required>
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
