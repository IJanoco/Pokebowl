<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\{
    AboutController,
    HomeController,
    MenuController,
};

use App\Http\Controllers\Admin\{
    CompanyController,
    DashboardController,
    InvoiceController,
    OrdersController,
    ProductController,
    UserController,
    TypeProductController,

};
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
    return view('auth.login');
});

Auth::routes();

Route::resource('/menu', MenuController::class);
//REPORTE
Route::get('/reporte-induccion',[ProductController::class, 'ReporteInduccion'])->name('reports.induccion');

//ADMIN VIEWS
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
//TIPO USUARIOS

//USUARIOS
Route::resource('/user', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
//TIPO PRODUCTOS
Route::resource('/typeproduct', TypeProductController::class);
Route::get('/typeproduct', [TypeProductController::class,'index'])->name('typeproduct');
//PRODUCTOS
Route::resource('/product', ProductController::class);
Route::get('/product', [ProductController::class, 'index'])->name('product');
//CLIENTE
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
