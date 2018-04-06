@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Members</h3></div>
              <div class="panel-body">
                <div class="table-responsive" style="background-color:#FFFFFF">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Borrow Limit</th>
                            <th>Borrow Duration</th>
                            <th>Renew Limit</th>
                            <th>Hold Expiry</th>
                            <th>Hold Limit</th>
                            <th>Per Day Fine</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($membCs as $c)
                          <tr>
                              <td> {{$c->name}} </td>
                              <td> {{$c->borrow_limit}} </td>
                              <td> {{$c->borrow_duration}} </td>
                              <td> {{$c->renew_limit}} </td>
                              <td> {{$c->hold_expiry}} </td>
                              <td> {{$c->hold_limit}} </td>
                              <td> {{$c->per_day_fine}} </td>
                          </tr>
                         @endforeach
                   </tbody>
                  </table>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
@endsection
