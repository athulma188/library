<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = DB::table('Member')->get();
        return view('view_members',compact('members'));
    }
    public function add()
    {
        return view('add_member');
    }
}
