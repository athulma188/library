<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
      public function create(Request $request)
      {
        $check = DB::table('BookCategory')->where('name', $request->name)->exists();
        if ($check)
        {
            return redirect()->action('BookCategoryController@add')->withErrors(['Category already exists']);
        }
        else
        {
            DB::table('BookCategory')->insert(['name'=>$request->name,'ref_copy_count'=>$request->ref_copies]);
            return redirect()->action('BookCategoryController@add')->withSuccess('Category Added!');
        }
      }
      public function add()
      {
          return view('add_book_category');
      }
      public function index()
      {
        $bookCs = DB::table('BookCategory')->get();
        return view('view_book_category',compact('bookCs'));
      }
}
