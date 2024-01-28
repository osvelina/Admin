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

// Route::get('/', function () {
//     return view('main');
// Route::get('/', function () {
//     return view('Layouts.main');});

Route::get('/', function () {
    return view('Layouts.main');});
    

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/Datapelanggan', function () {
    return view('Datapelanggan');
});

Route::get('/Dataserver', function () {
    return view('Dataserver');
});

Route::get('/Konten', function () {
    return view('Konten');
});
Route::get('/Voucher', function () {
    return view('Voucher');
});

Route::get('/homepage', function () {
    return view('homepage');
});


