  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
              <div class="card-heading" align=center><h3>Book Categories</h3></div>
              <div class="card-body">
                <div class="table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Reference Copy Count</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach($bookCs as $bookC)
                          <tr>
                              <td> {{$bookC->name}} </td>
                              <td> {{$bookC->ref_copy_count}} </td>
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
