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
                            <th>Book Title</th>
                            <th>Book ID</th>
                            <th>Copy_ID</th>
                            <th>Member Title</th>
                            <th>Member ID</th>
                            <th>Issue Date</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($det as $issue)
                          <tr>
                              <td> {{$issue->issue_id}} </td>
                              <td> {{$books[$issue->book_id]}} </td>
                              <td> {{$issue->book_id}} </td>
                              <td> {{$issue->copy_id}} </td>
                              <td> {{$names[$issue->member_id]}} </td>
                              <td> {{$issue->member_id}} </td>
                              <td> {{date('d/m/Y',strtotime($issue->date_of_issue))}} </td>
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
