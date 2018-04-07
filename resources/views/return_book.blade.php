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
              <div class="card-heading" align=center><h3>Return Book</h3></div>
              <div class="card-body">
                  <form action="/books/return" method="post" class="form">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">

                              <div class="form-group">
                               <label for="issue_id">Issue ID:</label>
                               <input type="number" class="form-control" id="issue_id" name="issue_id" required>
                              </div>
                          </div>
                    </div>
                      <button type="submit" style="float:right" class="btn btn-default">Return</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
