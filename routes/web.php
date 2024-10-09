<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::resource('/category', App\Http\Controllers\CategoryController::class);
Route::resource('/food', App\Http\Controllers\FoodController::class);
Route::resource('/customer', App\Http\Controllers\CustomerController::class);
// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);
// Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create']);
// Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

// Route::get('/category/edit', [App\Http\Controllers\CategoryController::class, 'edit']);
// Route::post('/category/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');

// Route::get('/category/update', [App\Http\Controllers\CategoryController::class, 'update']);
// Route::get('/category/destroy', [App\Http\Controllers\CategoryController::class, 'destroy']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

