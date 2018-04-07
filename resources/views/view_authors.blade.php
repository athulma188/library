@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Authors</h3></div>
              <div class="card-body">
                <div class="table-bordered" style="background-color:#FFFFFF">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author Name</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($authors as $author)
                          <tr>
                              <td> {{$author->author_id}} </td>
                              <td> {{$author->name}} </td>
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
