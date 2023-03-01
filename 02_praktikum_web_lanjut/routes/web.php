<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return "Selamat Datang";
});
Route::get('/about', function () {
    return "2141720014, Tarista Dwi Silvia, TI-2H";
});
Route::get('/articles1', function () {
    return "Ini merupakan halaman artikel dengan id 1";
});
Route::get('/articles2', function () {
    return "Ini merupakan halaman artikel dengan id 2";
});

