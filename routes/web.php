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


Route::get('/', 'StaticPagesController@home')->name('home');
// Route::post('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/login', 'UsersController@create')->name('login');

Route::resource('users','UsersController');

Route::get('loginn','SessionsController@create') -> name('loginn');
Route::post('loginn','SessionsController@store') -> name('loginn');
Route::delete('logout','SessionsController@destory') -> name('logout');