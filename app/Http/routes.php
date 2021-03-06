<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'web'], function () {
  Route::resource('camp', 'CampController');
  Route::resource('council', 'CouncilController');
  Route::resource('troop', 'TroopController');

  Route::get('new/council', function () {
    return view('register.council');
  });

  Route::post('neworganization', 'Auth\NewOrganization@store');
});
/*
| cname is the organizations name
|
*/
Route::group(['domain' => '{{cname}}.ruksack.com'], function() {
  Route::group(['namespace' => 'Admin'], function() {
    Route::group(['namespace' => 'Admin'], function() {

    });
  });
  Route::get('/', 'HomeController@index');

});
