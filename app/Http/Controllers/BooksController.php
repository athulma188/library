<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

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
        $det = DB::table('CurrentIssued')->get();
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
        try
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

              $out = DB::select("CALL add_n_copies(?,?,?)",[$bid,$request->copies,$request->date_of_pur]);
              if($out != [])
              {
                  foreach($out as $a => $val)
                      $err = $val;
                  return redirect()->back()->withErrors([($err)]);
              }
              return redirect()->action('BooksController@add')->withSuccess('Book Added!');

        }
        catch(QueryException $ex)
        {
            return redirect()->back()->withErrors([($ex->getMessage())]);
        }

      }
    }
    public function issue()
    {
        return view('issue_book');
    }
    public function issue_book(Request $request)
    {
        try{
        $out = DB::select('call issue_book(?,?,?)',[$request->copy_id,$request->book_id,$request->member_id]);
        if($out != [])
        {
            foreach($out as $a => $val)
                $err = $val;
            return redirect()->back()->withErrors([($err)]);
        }

        return redirect()->action('BooksController@issue')->withSuccess('Book Issued!');
        }
        catch(QueryException $ex)
        {
            return redirect()->back()->withErrors([($ex->getMessage())]);
        }

    }
    public function add_copy(Request $request)
    {
        try{
        $out = DB::select("CALL add_n_copies(?,?,?)",[$request->book_id,$request->copies,date('Y-m-d',strtotime($request->date_of_pur))]);
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
        return redirect()->back()->withSuccess('Copy Added!');
    }
    public function return(Request $request)
    {
      try{
      $out = DB::select("CALL return_book(?)",[$request->issue_id]);
      if($out != [])
      {
          foreach($out as $a => $val)
              $err = $val;
          return redirect()->back()->withErrors([($err)]);
      }
      return redirect()->back()->withSuccess('Book Returned!');
      }

      catch(QueryException $ex)
      {
          return redirect()->back()->withErrors([($ex->getMessage())]);
      }
    }

    public function renew(Request $request)
    {
        try{
        $out = DB::select("CALL renew_book(?)",[$request->issue_id]);
        if($out != [])
        {
            foreach($out as $a => $val)
                $err = $val;
            return redirect()->back()->withErrors([($err)]);
        }
        return redirect()->back()->withSuccess('Book Renewed!');
        }

        catch(QueryException $ex)
        {
            return redirect()->back()->withErrors([($ex->getMessage())]);
        }
    }
}
