<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/users', 'PagesController@users');
Route::get('/posts', 'PagesController@posts');

Route::resource('posts', 'PostsController');

// Route::get('/', function () {
//     // return 'This is the Home page';
//     return view('pages.index');
// });


// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/user/{name}', function ($name) {
//     return "Current user is $name";
// });