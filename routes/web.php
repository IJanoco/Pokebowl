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
    ShoppingCartController,

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


//ADMIN VIEWS
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//REPORTE
Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/reports-invoice',[InvoiceController::class, 'ReportInvoice'])->name('reports.invoiceOrder');
//TIPO USUARIOS

//USUARIOS
Route::resource('/user', UserController::class);
Route::get('/user/{item}/editar', [UserController::class, 'edit'])->name('user.edit.ajax');
Route::get('/user', [UserController::class, 'index'])->name('user');
//CARRITO DE COMPRAS
Route::resource('/shopping', ShoppingCartController::class);
Route::get('/shopping', [ShoppingCartController::class, 'index'])->name('shoppingcart');
//PEDIDOS
Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
//COMPAÑÍA
Route::get('/company', [CompanyController::class, 'index'])->name('company');
//TIPO PRODUCTOS
Route::resource('/typeproduct', TypeProductController::class);
Route::get('/typeproduct/{item}/editar', [TypeProductController::class,'edit'])->name('typeproduct.edit.ajax');
Route::get('/typeproduct', [TypeProductController::class,'index'])->name('typeproduct');
//PRODUCTOS
Route::resource('/product', ProductController::class);
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/{item}/editar', [ProductController::class, 'edit'])->name('product.edit.ajax');
//CLIENTE
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
