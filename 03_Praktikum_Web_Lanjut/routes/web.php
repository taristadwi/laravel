<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactusController;
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

Route::get('/', [HomeController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/Games' , [ProductsController::class, 'product']);
});

Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('programs')->group(function () {
    Route::get('/Programs', [ProgramsController::class, 'programs']);
});
Route::get('/aboutus', [AboutusController::class, 'aboutus']);

Route::get('/contactus', [ContactusController::class, 'contactus']);