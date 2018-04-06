@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading"><h3>Books</h3></div>
              <div class="panel-body">
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Issue ID</th>
                            <th>Fine Amount</th>
                            <th>Start Date</th

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($det as $issue)
                          <tr>
                              <td> {{$issue->issue_id}} </td>
                              <td> {{$issue->amount}} </td>
                              <td> {{date('d/m/Y',strtotime($issue->start_date))}} </td>
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
