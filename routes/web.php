<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::prefix('/product')->group(function () {
    Route::get('', [ProductController::class, 'index']);
    Route::get('/destroy', [ProductController::class, 'delete']);
    Route::get('/order', [OrderController::class, 'save']);
    Route::get('/remove/{rowId}', [ProductController::class, 'remove']);
    Route::get('/remove/{rowId}', [ProductController::class, 'remove']);
    Route::get('show', [ProductController::class, 'show'])->name('show');
    Route::get('addToCart/{id}', [ProductController::class, 'addToCart'])->name('addToCart');

});

