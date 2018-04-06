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
      public function create(Request $request)
      {
          $check = DB::table('Department')->where('name', $request->name)->exists();
          if ($check)
          {
              return redirect()->action('DepartmentController@add')->withErrors(['Department already exists']);
          }
          else
          {
              DB::table('Department')->insert(['name'=>$request->name,'total_no_of_books'=>0]);
              return redirect()->action('DepartmentController@add')->withSuccess('Department Added!');
          }
      }
}
