<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about-us');
});

// route prefix
Route::prefix('/produk')->group(function () {
    Route::get('/', [ProdukController::class, 'produk']);
    Route::get('/produk1', [ProdukController::class, 'produk1']);
    Route::get('/produk2', [ProdukController::class, 'produk2']);
});

Route::prefix('/program')->group(function () {
    Route::get('/', [ProgramController::class, 'program']);
    Route::get('/program1', [ProgramController::class, 'program1']);
    Route::get('/program2', [ProgramController::class, 'program2']);
});

// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

// route param
Route::get('/news', [App\Http\Controllers\NewsController::class, 'news']);
Route::get('/news/{id}', [App\Http\Controllers\NewsController::class, 'news1']);

route::resource('/contact', ContactController:: class,['only' => ['index', 'create', 'store']]);