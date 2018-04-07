<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class HoldController extends Controller
{
      public function add_hold(Request $request)
      {
          try
          {
              $out = DB::select("CALL add_hold(?,?)",[$request->book_id,$request->member_id]);
              if($out != [])
              {
                  foreach($out as $a => $val)
                      $err = $val;
                  return redirect()->back()->withErrors([($err)]);
              }
          }
          catch (QueryException $ex)
          {
              return redirect()->back()->withErrors([($ex->getMessage())]);
          }
          return redirect()->back()->withSuccess('Hold Added!');
      }
      public function view_holds()
      {
          $holds = DB::table('Hold')->get();
          return view('view_holds',compact('holds'));
      }
      public function issue(Request $request)
      {
          try
          {
              $out = DB::select("CALL issue_hold(?,?)",[$request->book_id,$request->member_id]);
              if($out != [])
              {
                  foreach($out as $a => $val)
                      $err = $val;
                  return redirect()->back()->withErrors([($err)]);
              }
          }
          catch (QueryException $ex)
          {
              return redirect()->back()->withErrors([($ex->getMessage())]);
          }
          return redirect()->back()->withSuccess('Hold Issued!');
      }
}
