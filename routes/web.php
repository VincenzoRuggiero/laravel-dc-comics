<?php

use App\Http\Controllers\PageController as PageController;
use App\Http\Controllers\ComicController as ComicController;
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

//Controler to route pages that guest users can see
Route::get('/', [PageController::class, 'index'])->name('home');

//Controllers to route Products pages
Route::get('/products', [ComicController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ComicController::class, 'show'])->name('products.show');