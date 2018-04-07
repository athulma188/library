<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
      public function index()
      {
          $trans = DB::table('Transaction')->get();
          $bal = $trans[count($trans)-1]->balance;
          return view('view_transactions',compact('trans','bal'));
      }
}
