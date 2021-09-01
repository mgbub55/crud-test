<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('products.index');
});

Route::resource('products', ProductController::class);
Route::resource('materials', MaterialController::class);
// Route::get('index', ProductController::class, 'index');
// Route::post('products', ProductController::class);
// Route::post('products', ProductController::class);
// Route::post('products', ProductController::class);
