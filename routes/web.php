<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin/libros', App\Http\Controllers\BookController::class)->names('book');
Route::resource('/admin/categorias', App\Http\Controllers\CategoryController::class)->names('category');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/buscar', [App\Http\Controllers\FindBookController::class, 'show'])->name('find');
Route::get('/libros/categoria/{categoria}', [App\Http\Controllers\FindBookController::class, 'index'])->name('findBy');
Route::get('/ordenes', [App\Http\Controllers\OrdersController::class, 'index' ])->name('orders');
Route::resource('/carrito', App\Http\Controllers\CartController::class)->names('cart');
Route::resource('/admin/administradores',App\Http\Controllers\AdminController::class)->names('Admins');
