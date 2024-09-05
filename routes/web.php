<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', [HomeController::class,'home']);

Route::get('/category/food-baverage', [CategoryController::class,'fnb']);
Route::get('/category/beauty-health', [CategoryController::class,'bh']);
Route::get('/category/home-care', [CategoryController::class,'homecare']);
Route::get('/category/baby-kid', [CategoryController::class,'babykid']);

Route::get('/user/{id}/nama/{nama}', [UserController::class,'user']);

Route::get('/penjualan', [PenjualanController::class,'penjualan']);