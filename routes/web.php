<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaigesController;
use App\Http\Controllers\ProductsController;

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
Route::get('/paiges', [PaigesController::class, 'index'])->name('paiges.index');
Route::get('/products', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products_save', [ProductsController::class, 'store'])->name('products.store');
