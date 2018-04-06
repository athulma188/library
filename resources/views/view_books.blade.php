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
                            <th>ID</th>
                            <th>Title</th>
                            <th>ISBN</th>
                            <th>Edition NO</th>
                            <th>Genre</th>
                            <th>Publisher</th>
                            <th>Edition</th>
                            <th>Copies available</th>
                            <th>Total Copies</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($books as $book)
                          <tr>
                              <td> {{$book->book_id}} </td>
                              <td> {{$book->title}} </td>
                              <td> {{$book->isbn}} </td>
                              <td> {{$book->edition_no}} </td>
                              <td> {{$book->genre}} </td>
                              <td> {{$book->publisher}} </td>
                              <td> {{$book->edition}} </td>
                              <td> {{$book->no_of_copies_available}} </td>
                              <td> {{$book->total_no_of_copies}} </td>
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
