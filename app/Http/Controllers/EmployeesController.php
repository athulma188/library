<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = DB::table('Employee')->get();
        return view('view_employees',compact('employees'));
    }
    public function add()
    {
        return view('add_employee');
    }
}
