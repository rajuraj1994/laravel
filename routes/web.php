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

Route::get('/niit', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return view('firstpage');
// });

Route::get('/hello','App\Http\Controllers\myController@index');

//to show addproduct form
Route::get('/addproduct','App\Http\Controllers\myController@showproductform');
