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
}
