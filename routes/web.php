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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/menu', MenuController::class);

Route::get('/dashboard', [App\Http\Controllers\ControllersAdmin\DashboardController::class, 'index'])->name('dashboard');
Route::get('/invoice', [App\Http\Controllers\ControllersAdmin\InvoiceController::class, 'index'])->name('invoice');
Route::get('/user', [App\Http\Controllers\ControllersAdmin\UserController::class, 'index'])->name('user');
Route::get('/product', [App\Http\Controllers\ControllersAdmin\ProductController::class, 'index'])->name('product');
Route::get('/orders', [App\Http\Controllers\ControllersAdmin\OrdersController::class, 'index'])->name('orders');
Route::get('/company', [App\Http\Controllers\ControllersAdmin\CompanyController::class, 'index'])->name('company');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
