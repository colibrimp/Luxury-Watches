<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::get('/basket/order', [BasketController::class, 'basketOrder'])->name('basketOrder');
Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basketRemove');
Route::post('/basket/confirm', [BasketController::class, 'basketConfirm'])->name('basketConfirm');
//важно в какой последов наход роутеры корзины и перед каталогом иначе может не вывести данные

Route::get('/catalog/{catalog}/{product_id}', [ProductController::class, 'showProduct'])->name('showProduct');
Route::get('/catalog/{catalog}', [ProductController::class, 'showCatalog'])->name('showCatalog');
Route::get('/brand/{brand}', [ProductController::class, 'showBrand'])->name('showBrand');
