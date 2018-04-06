<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = DB::table('Books')->get();
        return view('view_books',compact('books'));
    }
    public function add()
    {
        return view('add_book');
    }
    public function create(Request $request)
    {
      $check = DB::table('Books')->where('isbn', $request->isbn)->exists();
      if ($check)
      {
          return redirect()->action('BooksController@add')->withErrors(['Book already exists']);
      }
      else
      {
          DB::table('Books')->insert(['title'=>$request->title,
                                      'isbn'=>$request->isbn,
                                      'publisher'=>$request->publisher,
                                      'category'=> $request->category,
                                      'edition_no'=>$request->edit_no,
                                      'genre'=>$request->genre,
                                      'edition'=>$request->edition,
                                      'no_of_copies_available'=>$request->copies
        ]);
          $bid = DB::table('Books')->where('isbn',$request->isbn)->value('bid');
          $i = 1
          for ($i = 1; $i < $request->copies;$i++)
          {
              DB::select("CALL add_copy(?)",[$bid]);
          }

          return redirect()->action('BooksController@add')->withSuccess('Book Added!');
      }
    }
}
