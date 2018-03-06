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

/*
|--------------------------------------------------------------------------
| Front End Routes
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/listings', 'ListingController@index');
Route::get('/listings/{id}', ['as'=>'listing.detail', 'uses'=>'ListingController@show']);



Route::auth();

Route::get('/home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Admin Routes
*/

Route::get('/admin', function () {

      return view('admin.index');
  });

Route::resource('admin/users', 'AdminUsersController');
// Route::resource('admin/users/create', 'AdminUsersController@create');
