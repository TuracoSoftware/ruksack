<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Http\Requests;

class NewOrganization extends Controller
{
  public function store(Request $request) {
    echo "test";
    $this->validate($request, [
        'first-name' => 'required|max:35',
        'last-name' => 'required|max:35',
        'name' => 'required|max:35',                        //The organizations name
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
    ]);

    if($request->input('password') == $request->input('password_confirmation')) {
      // Create the user the is going to be assigned as the administrator to this organization
      // by default
      echo "made it";
      $user = new User;
      $user->name = $request->input('first-name') + ' ' + $request->input('last-name');
      $user->name = title_case($user->name);
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->save();

      // Create the organization
      $organization = new Organization;
      $organization->name = $request->input('name');
      $organization->save();

      $role = Role::where('name','admin');

      $user->attachRole($role);
      $user->attach($organization);
    }
  }
}
