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
              <div class="panel-heading"><h3>Issue Book</h3></div>
              <div class="panel-body">
                  <form action="/books/issue" method="post" class="form">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">

                              <div class="form-group">
                               <label for="book_id">Book ID:</label>
                               <input type="number" class="form-control" id="book_id" name="book_id" required>
                              </div>


                              <div class="form-group">
                               <label for="member_id">Member ID:</label>
                               <input type="number" class="form-control" id="member_id" name="member_id" required>
                              </div>

                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                             <label for="copy_id">Copy ID:</label>
                             <input type="number" class="form-control" id="copy_id" name="copy_id" required>
                            </div>
                      </div>
                    </div>
                      <button type="submit" style="float:right" class="btn btn-default">Issue</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
