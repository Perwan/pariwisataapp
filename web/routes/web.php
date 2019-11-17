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

Route::get('/', function () {
    return view('pages.login');
});

//Auth::routes();

Route::get('/home', function () {
    return view('dashboard');
})->name("home");

Route::resource('wisata','wisatacontroller');
Route::resource('kendaraan','kendaraancontroller');
Route::resource('history','historycontroller');

Route::get("register",function(){
    return view('pages.register');
})->name("register");

Route::get("login",function(){
    return view('dashboard');
})->name("login");