<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use Illuminate\Http\Request;

class FineController extends Controller
{
      public function view_unsettled_fine()
      {
        $det = DB::table('Fine')->where('status','unsettled')->get();
        $nam = "Unsettled";
        return view('view_fine',compact('det','nam'));
      }
      public function view_settled_fine()
      {
        $det = DB::table('Fine')->where('status','settled')->get();
        $nam = "Settled";
        return view('view_fine',compact('det','nam'));
      }
      public function settle(Request $request)
      {
          try
          {
            $out = DB::select("CALL settle_fine(?,?,?,?)",[$request->issue_id,
                                                         Auth::user()->member_id,
                                                         $request->amount,
                                                         date('Y-m-d',strtotime($request->date))
                                                       ]);
            if($out != [])
            {
                foreach($out as $a => $val)
                    $err = $val;
                return redirect()->back()->withErrors([($err)]);
            }

          }
          catch(QueryException $ex)
          {
              return redirect()->back()->withErrors([($ex->getMessage())]);
          }
          return redirect()->back()->withSuccess('Fine Settled!');
      }
}
