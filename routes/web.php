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


Auth::routes();
Route::get('/',function(){
  return view('intro');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dom','DomController');

Route::post('exam/search','ExamController@search');

Route::resource('exam','ExamController');


Route::get('files/download/{id}','FilesController@download');

Route::post('files/search','FilesController@search');

Route::resource('files','FilesController');
Route::resource('user','UserController');
