<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});
//TUGAS

// no 1 
Route::get('/', [HomeController::class,'index']);

// no 2
Route::prefix('category')->group(function () { 
    Route::get('/food-beverage', [ProductController::class, 'category1']); 
    Route::get('/beauty-health', [ProductController::class, 'category2']); 
    Route::get('/home-care', [ProductController::class, 'category3']);
    Route::get('/baby-kid', [ProductController::class, 'category4']);

});
// no 3
Route::get('/user/{id}/name/{name}', [UserController::class,'index']);

// n0 4
Route::get('/penjualan', [PenjualanController::class,'index']);
