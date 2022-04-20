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
Route::get('userview',"App\Http\Controllers\userController@userview");
Route::get('userinput',"App\Http\Controllers\userController@userinput");
Route::post('insert',"App\Http\Controllers\userController@userinsert");
Route::get('delete/{id}',"App\Http\Controllers\userController@userdelete");
Route::get('edit/{id}',"App\Http\Controllers\userController@editShow");
Route::post('edit',"App\Http\Controllers\userController@updateEmployee");

    /*One to Many*/
Route::get('show',"App\Http\Controllers\PostController@showpost");
Route::get('delete/{id}',"App\Http\Controllers\PostController@deleteComment");
