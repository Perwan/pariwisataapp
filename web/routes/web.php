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

Auth::routes();
Route::middleware("auth")->group(function (){
    Route::get('/home/{page?}',"HomeController@index")->name("home");
    
    Route::resource('wisata','wisatacontroller');
    Route::resource('kendaraan','kendaraancontroller');
    Route::resource('transaksi','transaksicontroller');
    Route::resource('pelanggan','pelanggancontroller');
    Route::resource('pembayaran','pembayarancontroller');
    Route::get("transaksi/detail/{id}",'transaksicontroller@detail')
                ->name("transaksi.detail");
                Route::get("transaksi/list/",'transaksicontroller@selesai')
                ->name("transaksi.selesai");
});

Route::get("register",function(){
    return view('pages.register');
})->name("register")->middleware("guest");

Route::get("login",function(){
    return view('dashboard');
})->name("login")->middleware("guest");