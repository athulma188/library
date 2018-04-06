<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
      public function add()
      {
          return view('add_department');
      }
      public function index()
      {
          $departments = DB::table('Department')->get();
          return view('view_departments',compact('departments'));
      }
}
