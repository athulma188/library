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
              <div class="panel-heading"><h3>Set Authorized Professor</h3></div>
              <div class="panel-body">
                  <form action="/authorized_professors/set" method="post" class="form">
                    {{csrf_field()}}
                      <div class='row'>
                          <div class="col-md-6">

                              <div class="form-group">
                               <label for="dept_id">Department ID:</label>
                               <input type="number" class="form-control" id="dept_id" name="dept_id" required>
                              </div>


                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                             <label for="prof_id">Professor ID:</label>
                             <input type="number" class="form-control" id="prof_id" name="prof_id" required>
                            </div>
                      </div>
                    </div>
                      <button type="submit" style="float:right" class="btn btn-default">Set</button>
                  </form>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
