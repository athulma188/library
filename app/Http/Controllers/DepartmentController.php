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
      public function professors()
      {
          $names = DB::table('Member')->select('member_id','name')->pluck('name','member_id')->toArray();
          $profs = DB::table('Professor')->get();
          return view('view_professors',compact('profs','names'));
      }
      public function add_professor()
      {
          return view('add_professor');
      }
      public function store_professor(Request $request)
      {
          $check = DB::table('Professor')->where('member_id', $request->member_id)->exists();
          if ($check)
          {
              return redirect()->action('DepartmentController@add_professor')->withErrors(['Professor already exists']);
          }
          else
          {
              DB::table('Professor')->insert(['member_id'=>$request->member_id,'dept_id'=>$request->dept_id]);
              return redirect()->action('DepartmentController@add_professor')->withSuccess('Professor Added!');
          }
      }

      public function set_authorized_professor(Request $request)
      {
          $check = DB::table('AuthorizedProfessor')->where('dept_id', $request->dept_id)->exists();
          if ($check)
          DB::table('AuthorizedProfessor')->where('dept_id', $request->dept_id)->update(['prof_id'=>$request->prof_id]);
          else
          DB::table('AuthorizedProfessor')->insert(['prof_id'=>$request->prof_id,'dept_id'=>$request->dept_id]);
          return redirect()->action('DepartmentController@set_authorized_professor')->withSuccess('Authorized Professor has been set!');

      }
      public function view_authorized_professors()
      {
          $profs = DB::table('AuthorizedProfessor')->get();
          return view('view_authorized_professors',compact('profs'));
      }

}
