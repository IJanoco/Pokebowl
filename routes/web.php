<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\{
    AboutController,
    HomeController,
    MenuController,
    ShoppingCartController,
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

Route::group(['middleware'=>['auth', 'verify.role:admin']], function(){
    //ADMIN VIEWS

    //DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //REPORTE
    Route::resource('/invoice', InvoiceController::class);
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice');

    //TIPO USUARIOS

    //USUARIOS
    Route::resource('/user', UserController::class);
    Route::get('/user/{item}/editar', [UserController::class, 'edit'])->name('user.edit.ajax');
    Route::get('/user', [UserController::class, 'index'])->name('user');


    //PEDIDOS
    Route::resource('/orders', OrdersController::class);
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders');
    //COMPAÑÍA
    Route::resource('/company', CompanyController::class);
    Route::get('/company', [CompanyController::class, 'index'])->name('company');
    //TIPO PRODUCTOS
    Route::resource('/typeproduct', TypeProductController::class);
    Route::get('/typeproduct/{item}/editar', [TypeProductController::class,'edit'])->name('typeproduct.edit.ajax');
    Route::get('/typeproduct', [TypeProductController::class,'index'])->name('typeproduct');
    //PRODUCTOS
    Route::resource('/product', ProductController::class);
    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/product/{item}/editar', [ProductController::class, 'edit'])->name('product.edit.ajax');
});


//CLIENTE

//REPORTE CLIENTE
Route::get('/reports-invoice',[InvoiceController::class, 'ReportInvoice'])->name('reports.invoiceOrder');
//PERFIL
Route::get('/user2', [UserController::class, 'index2'])->name('userprofile');
Route::patch('/user/{item}/editar', [UserController::class, 'update2'])->name('edit.profile');
//HOME
Route::get('/home', [HomeController::class, 'index'])->name('home');
//MENU
Route::resource('/menu', MenuController::class);
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

//ABOUT
Route::get('/about', [AboutController::class, 'index'])->name('about');
//CARRITO DE COMPRAS
Route::resource('/shopping', ShoppingCartController::class);
Route::get('/shopping', [ShoppingCartController::class, 'index'])->name('shoppingcart');
Route::post('/add', [ShoppingCartController::class, 'store'])->name('cart.store');
