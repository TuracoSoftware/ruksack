<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CampController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
  }

  public function create() {
    return view('camp.create');
  }

  public function store(Request $request) {
    if($request->input('password') == $request->input('password_confirmation')) {
    $user = new User;
    $user->name = $request->input('director_name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->type = "camp ".$request->input('name');
    $user->save();
    $camp = new camp;
    $camp->name = $request->input('name');
    $camp->phone_number = $request->input('phone_number');
    $camp->address = $request->input('address');
    $camp->city = $request->input('city');
    $camp->state = $request->input('state');
    $camp->zip = $request->input('zip');
    $camp->address = $request->input('schedule');
    $camp->number_of_weeks = $request->input('number_of_weeks');
    $camp->permissions = $request->input('permissions');
    $camp->director_name = $request->input('director_name');
    $camp->director_phone_number = $request->input('director_phone_number');
    $camp->council_id = 0;
    $camp->remember_number = $request->input('remember_number');
    $camp->save();
  }
  }

  public function edit($id) {

  }

  public function update($id, Request $request) {

  }
}
