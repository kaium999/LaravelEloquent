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
Route::get('/user',"App\Http\Controllers\userController@userinfo");
Route::get('/inputview',"App\Http\Controllers\userController@userinputview");
Route::post('/insert',"App\Http\Controllers\userController@userinputsave");
Route::get('edit/{id}','App\Http\Controllers\userController@editShow');
Route::post('edit','App\Http\Controllers\userController@updateEmployee');
Route::get('delete/{id}','App\Http\Controllers\userController@deleteemployee');