<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MenuController;

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

Route::resource('car', CarController::class);
Route::get('/', [MenuController::class,'index'])->name('menu.index');
Route::get('/search',[MenuController::class,'showSearch'])->name('menu.showSearch');
Route::get('/favorites',[MenuController::class,'showFavorite'])->name('menu.showFavorite');
Route::get('/mySearch',[MenuController::class,'showMySearch'])->name('menu.showMySearch');
