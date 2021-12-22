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

Route::get('/', 'UserController@index')->name('index');

// Route::get('/', 'UserController@index')->name('index');

// Route::get('/', function () {
//     return view('home');
// });

Route::post('/actionlogin', 'LoginController@actionlogin')->name('actionlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/user', 'AdminController@showDataUser')->name('user');
Route::get("/admin/event/search", "EventController@search");
Route::get('/admin/event/tambah', 'EventController@create')->name('tambah');
Route::post('/admin/event/insert', 'EventController@store');
Route::get('/admin/event/delete/{id}','EventController@destroy')->name('delete');
Route::get('/admin/event/edit/{id}','EventController@edit')->name('edit');
Route::post('/admin/event/update/{id}', 'EventController@update');
Route::get('/admin/event/event', 'EventController@index')->name('event');
Route::get("/register/{id}", "UserController@register")->name('register');
Route::post("/actionregis", "UserController@actionregis");
Route::get("/success", "UserController@success")->name('success');
Route::get("/sertif", "FillPDFController@index")->name('sertif');
Route::post("/buatsertif", "FillPDFController@process")->name('buatsertif');
Route::get('/login', 'LoginController@login')->name('login');
