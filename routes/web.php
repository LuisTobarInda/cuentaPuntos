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


Route::get('/', function () {
    return view('welcome');
});*/
/*Route::view('');*/

Route::view('/','login');
//Route::view('login','login');
Route::view('dashboard','dashboard');

Route::post('login', function(){
    return 'Post login';
});