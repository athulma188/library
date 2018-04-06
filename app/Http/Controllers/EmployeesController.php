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
    public function create(Request $request)
    {
      $check = DB::table('Employee')->where('email', $request->email)->exists();
      if ($check)
      {
          return redirect()->action('EmployeesController@add')->withErrors(['Employee already exists']);
      }
      else
      {
          DB::table('Employee')->insert(['name'=>$request->name,
                                      'gender'=>$request->gender,
                                      'date_of_birth'=>date('Y-m-d',strtotime($request->date_of_birth)),
                                      'salary'=> $request->salary,
                                      'email'=>$request->email,
                                      'phone_number'=>$request->phone_number,
        ]);
          return redirect()->action('EmployeesController@add')->withSuccess('Employee Added!');
      }
    }
}
