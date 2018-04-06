<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MemberCategoryController extends Controller
{
    public function create(Request $request)
    {
      $check = DB::table('MemberCategory')->where('name', $request->name)->exists();
      if ($check)
      {
          return redirect()->action('MemberCategoryController@add')->withErrors(['Category already exists']);
      }
      else
      {
          DB::table('MemberCategory')->insert(['name'=>$request->name,
                                             'borrow_limit'=>$request->borrow_limit,
                                             'renew_limit'=>$request->renew_limit,
                                             'hold_limit'=>$request->hold_limit,
                                             'hold_expiry'=>$request->hold_exp,
                                             'borrow_duration'=>$request->borrow_dur,
                                             'per_day_fine'=>$request->perday_fine
                                           ]);
          return redirect()->action('MemberCategoryController@add')->withSuccess('Category Added!');
      }
    }
    public function add()
    {
        return view('add_member_category');
    }
    public function index()
    {
      $membCs = DB::table('MemberCategory')->get();
      return view('view_member_category',compact('membCs'));
    }
}
