<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class MembersController extends Controller
{
    public function index()
    {
        $members = DB::table('Member')->get();
        return view('view_members',compact('members'));
    }
    public function add()
    {
        return view('add_member');
    }
    public function create(Request $request)
    {
      $check = DB::table('Member')->where('email', $request->email)->exists();
      try{
      if ($check)
      {
          return redirect()->action('MembersController@add')->withErrors(['Member already exists']);
      }
      else
      {
          DB::table('Member')->insert(['name'=>$request->name,
                                      'gender'=>$request->gender,
                                      'date_of_birth'=>date('Y-m-d',strtotime($request->date_of_birth)),
                                      'category'=> $request->category,
                                      'email'=>$request->email,
                                      'phone_number'=>$request->phone,
        ]);
          return redirect()->action('MembersController@add')->withSuccess('Member Added!');
      }
      }
      catch(QueryException $ex)
      {
          return redirect()->back()->withErrors([($ex->getMessage())]);
      }
    }
}
