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
    public function issued()
    {
        $det = DB::table('IssuedBy')->get();
        $books = DB::table('Books')->select('book_id','title')->pluck('title', 'book_id')->toArray();
        $names = DB::table('Member')->select('member_id','name')->pluck('name', 'member_id')->toArray();
        return view('view_issued_books',compact('det','books','names'));
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
          $bid = DB::table('Books')->where('isbn',$request->isbn)->value('book_id');

          DB::select("CALL add_n_copies(?,?,?)",[$bid,$request->copies,$request->date_of_pur]);

          return redirect()->action('BooksController@add')->withSuccess('Book Added!');
      }
    }
    public function view_unsettled_fine()
    {
      $det = DB::table('Fine')->where('status','unsettled')->get();
      return view('view_fine',compact('det'));
    }
    public function view_settled_fine()
    {
      $det = DB::table('Fine')->where('status','settled')->get();
      return view('view_fine',compact('det'));
    }
    public function issue()
    {
        return view('issue_book');
    }
    public function issue_book(Request $request)
    {
        DB::select('call issue_book(?,?,?)',[$request->copy_id,$request->book_id,$request->member_id]);
        return redirect()->action('BooksController@issue')->withSuccess('Book Issued!');
    }
}
