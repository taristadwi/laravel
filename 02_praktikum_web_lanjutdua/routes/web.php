<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;

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

Route::get('/',  [PageController::class, 'index']);
Route::get('/',  [HomeController::class, 'index']);

Route::get('/about',  [PageController::class, 'about']);
Route::get('/about',  [AboutController::class, 'about']);

Route::get('/articles/{id}',  [PageController::class, 'articles']);
Route::get('/article/{id}',  [ArticleController::class, 'article']);

