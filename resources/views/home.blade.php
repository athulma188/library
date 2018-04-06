@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td><a href="/books"><button type="button" class="btn btn-success btn-lg">View Books</button></a></td>
                            <td><a href="/books/add"><button type="button" class="btn btn-success btn-lg">Add Book</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/book_category"><button type="button" class="btn btn-success btn-lg">View Book Categories</button></a></td>
                            <td><a href="/book_category/add"><button type="button" class="btn btn-success btn-lg">Add Book Category</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/members"><button type="button" class="btn btn-success btn-lg">View Members</button></a></td>
                            <td><a href="/members/add"><button type="button" class="btn btn-success btn-lg btn-lg">Add Member</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/member_category"><button type="button" class="btn btn-success btn-lg">View Member Categories</button></a></td>
                            <td><a href="/member_category/add"><button type="button" class="btn btn-success btn-lg btn-lg">Add Member Category</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/employees"><button type="button" class="btn btn-success btn-lg">View Employees</button></a></td>
                            <td><a href="/employees/add"><button type="button" class="btn btn-success btn-lg">Add Employee</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/departments"><button type="button" class="btn btn-success btn-lg">View Departments</button></a></td>
                            <td><a href="/departments/add"><button type="button" class="btn btn-success btn-lg">Add Department</button></a></td>
                        </tr>
                        <tr>
                            <td><a href="/authors"><button type="button" class="btn btn-success btn-lg">View Authors</button></a></td>
                            <td><a href="/authors/add"><button type="button" class="btn btn-success btn-lg">Add Author</button></a></td>
                        </tr>
                    </table>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection
