<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| post, get, delete, put
|
*/

Route::get('/','FrontController@index');

//Route::get('cinema','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::resource('mail','MailController');
Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');
Route::get('prueba','FrontController@prueba');

Route::get('api','PostsController@api');

Route::get('posts','PostsController@index');
Route::get('posts/{id}','PostsController@show');

Route::get('users','UsersController@index');
Route::get('users/{id}','UsersController@show');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
