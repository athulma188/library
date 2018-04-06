@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="opacity:0.85">
                <div class="card-header">Dashboard</div>

                <div class="card-body" >
                    <table class="table-condensed" align=center>
                        <tr>
                              <td><a href="/issued" class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Issued Books</a></td>
                              <td><a href="/books/issue"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Issue Book</a></td>

                            <td><a href="/settled_fine"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Settled Fines</a></td>
                            <td><a href="/unsettled_fine"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Unsettled Fines</a></td>
                        </tr>
                        <tr>
                            <td><a href="/books"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Books</a></td>
                            <td><a href="/books/add"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Book</a></td>

                            <td><a href="/book_category"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Book Categories</a></td>
                            <td><a href="/book_category/add"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Book Category</a></td>
                        </tr>
                        <tr>
                            <td><a href="/members"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Members</a></td>
                            <td><a href="/members/add" class="btn btn-info  btn-lg  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0" >Add Member</a></td>

                            <td><a href="/member_category"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Member Categories</a></td>
                            <td><a href="/member_category/add" class="btn btn-info  btn-lg  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Member Category</a></td>
                        </tr>
                        <tr>
                            <td><a href="/professors"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Professors</a></td>
                            <td><a href="/professors/add" class="btn btn-info  btn-lg  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Professor</a></td>

                            <td><a href="/employees"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Employees</a></td>
                            <td><a href="/employees/add"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Employee</a></td>
                        </tr>
                        <tr>
                            <td><a href="/departments"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Departments</a></td>
                            <td><a href="/departments/add"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Department</a></td>

                            <td><a href="/authors"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">View Authors</a></td>
                            <td><a href="/authors/add"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Author</a></td>
                        </tr>
                        <tr>
                            <td><a href="/authored_by"  class="btn btn-info  btn-lg" role="button" style="width:100%; ;min-height:70px;border-radius:0">Add Authored By </a></td>
                        </tr>
                    </table>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
