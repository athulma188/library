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

}
