<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProductsController;

use App\Http\Controllers\UsersController;

use App\Http\Controllers\AdminController;

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

Route::get('/products', [ProductsController::class, 'index']);

Route::get('/products/create', [ProductsController::class, 'create']);
Route::post('/products/create', [ProductsController::class, 'store']);

Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::post('/products/edit/{id}', [ProductsController::class, 'update']);

Route::post('/products/delete/{id}', [ProductsController::class, 'delete']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/admin", [AdminController::class,'index'])->middleware(["auth","admin"]);
