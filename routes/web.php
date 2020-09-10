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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo/create','TodoController@create');
Route::get('/todo','TodoController@index')->name('todo.index');
Route::put('/todo/{todo}/update','TodoController@update')->name('todo.update');
Route::get('/todo/{todo}/edit','TodoController@edit');
Route::POST('/todo/create','TodoController@store');
Route::get('/user','UserController@index');


   //Route::middleware('auth')->group(function(){
    //Route::resource('/todo','TodoController');

//});

Route::get('/user','UserController@index');
Auth::routes();
//Auth::logout();

Route::get('/home', 'HomeController@index')->name('home');
