<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add()
    {
        return view('add_author');
    }
    public function index()
    {
        $authors = DB::table('Author')->get();
        return view('view_authors',compact('authors'));
    }
    public function create(Request $request)
    {
        $check = DB::table('Author')->where('name', $request->name)->exists();
        if ($check)
        {
            return redirect()->action('AuthorController@add')->withErrors(['Author already exists']);
        }
        else
        {
            DB::table('Author')->insert(['name'=>$request->name]);
            return redirect()->action('AuthorController@add')->withSuccess('Author Added!');
        }
    }
    public function authored_by()
    {
        return view('authored_by');
    }
    public function add_authored_by(Request $request)
    {
      $check = DB::table('AuthoredBy')->where('author_id', $request->author_id)->where('book_id',$request->book_id)->exists();
      if ($check)
      {
          return redirect()->action('AuthorController@authored_by')->withErrors(['Entry already exists']);
      }
      else
      {
          DB::table('AuthoredBy')->insert(['author_id'=>$request->author_id, 'book_id'=>$request->book_id]);
          return redirect()->action('AuthorController@authored_by')->withSuccess('Entry Added!');
      }
    }
}
