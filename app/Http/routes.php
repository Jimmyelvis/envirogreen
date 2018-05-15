<?php

use App\Listing;
use Illuminate\Support\Facades\Input;

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

Route::resource('/listings', 'ListingController@index');

Route::get('/listings/{id}', ['as'=>'listing.detail', 'uses'=>'ListingController@show']);
Route::get('/listingsresults', 'ListingController@listingsresults');
Route::get('/staff', 'StaffController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/search', 'ListingController@listingsresults');
Route::get('/multisearch', 'ListingController@multiresults');

// Route::get('/multisearch', 'ListingsController@multiresults');


/*
|--------------------------------------------------------------------------
| Admin Routes
*/

Route::group(['middleware'=>'admin'], function(){

  Route::get('/admin', function () {

      return view('admin.index');
  });

  Route::resource('admin/users', 'AdminUsersController');
  Route::resource('admin/listings', 'AdminListingsController');

});

// Route::get('/admin', function () {
//
//       return view('admin.index');
//   });
//
//
// Route::resource('admin/users', 'AdminUsersController');
// Route::resource('admin/listings', 'AdminListingsController');
