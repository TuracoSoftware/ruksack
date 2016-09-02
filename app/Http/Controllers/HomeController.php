<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::user()->type == "admin"){
        return view('admin.home');
      }elseif (Auth::user()->type == "troop" || Auth::user()->type == "scout master") {
        return view('troop.home');
      } else {
        return view('home');
      }
    }
}
