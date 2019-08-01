<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend Route Start//
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about_us');
Route::get('/accomodation', 'HomeController@accomodation');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/blog', 'HomeController@blog');
Route::get('/blog_details', 'HomeController@blog_details');
Route::get('/services', 'HomeController@services');
Route::get('/contact', 'HomeController@contact');

// Backend Route Start //
//Route::get('/admin', 'DashboardController@index');
//Route::resource('admin/userprofile', 'UserProfile');
Auth::routes();

Route::get('/admin', 'HomeController@index');
