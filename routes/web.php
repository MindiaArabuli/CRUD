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

Route::get('/', 'MainController@index');
Route::get('/admin', function () {
    return view('admin.main');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main', 'MainController@index');
// Route::post('/main/checklogin', 'MainController@checklogin');
Route::post('/bookshow/request', 'MainController@request');
Route::resource('/','MainController');
// Route::get('/admin','MainController');
Route::get('/{id}','MainController@show');
Route::get('/admin/request','BookController@request');
Route::resource('admin/book','BookController');
Route::post('/{id}','MainController@update');
// Route::post('{id}', 'MainController@showMore');
// Route::get('main/adminPanel', 'MainController@successlogin');
// Route::get('main/logout', 'MainController@logout');


