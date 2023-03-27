<?php

use App\Http\Controllers\Backend\Admincontroller;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Customer_registercontroller;
use App\Http\Controllers\Backend\dashboardcontroller;
use App\Http\Controllers\Backend\Products\ProductController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\Checkout\CheckoutController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JewelleryController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\ProductBookingController;
// use Illuminate\Support\Facades\Route;




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
// users ======================================================================================
Route::group([], function () {

    Route::get('/user/login', [LoginController::class, 'userLogin'])->name('user.login');
    Route::post('/user/login', [LoginController::class, 'loginCheck'])->name('user.login.check');
    Route::post('/user/register', [LoginController::class, 'userstore'])->name('user.store');
    Route::get('/user/logout', [LoginController::class, 'user_logout'])->name('user.logout');
    Route::get('/admin/users', [LoginController::class, 'adminUser'])->name('admin.user.list');
    Route::post('/admin/delete', [LoginController::class, 'delete'])->name('admin.user.delete');


});

// ============================================================================================


// Frontend ==================================================================================
Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contactus', [ContactusController::class,'index']);
Route::get('/latest', [JewelleryController::class,'index'])->name('latest');
Route::get('/about', [aboutController::class,'index']);

// ===========================================================================================

// Dashboard view ============================================================================
Route::get('/profile', [dashboardcontroller::class,'profile'])->name('admin.profile');
// Route::get('/dashboard',[dashboardcontroller::class,'dashboard'])->name('dashboard')

// ===========================================================================================



// Product Single Cart =======================================================================
Route::get('/cart/{id}', [CartController::class, 'cart'])->name('product.single');
Route::post('/cart/store', [CartController::class, 'cartStore'])->name('cart.store');

// Product Goto Shopping Cart --------
Route::get('/add/to/cart', [CartController::class, 'addtoCart'])->name('product.add.to.cart');

// Product Delete From Shopping Cart ---------------
Route::get('/cart/delete/{id}', [CartController::class, 'destroy'])->name('cart.delete');

// ===========================================================================================

// Product Booking ===========================================================================
Route::post('/product/booking', [ProductBookingController::class, 'booking'])->name('product.booking');
Route::get('/product/bookingSuccess', [ProductBookingController::class, 'bookingSuccess'])->name('product.bookingSuccess');
Route::get('/product/bookingFail', [ProductBookingController::class, 'bookingFail'])->name('product.bookingFail');

// ---- Admin Orders view
Route::get('/booking/products', [ProductBookingController::class, 'index'])->name('booking.products');
Route::post('/booking/products/delete', [ProductBookingController::class, 'destroy'])->name('booking.products.delete');
Route::get('/booking/products-status', [ProductBookingController::class, 'change_bookingStatus'])->name('booking.products.status');

// ===========================================================================================


// Product Checkout/ Billing Page ============================================================
Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('product.checkout');
// ===========================================================================================


// Bracelete Product Page Route ==============================================================
Route::get('/earings', [CheckoutController::class, 'earings'])->name('product.earings.page');
Route::get('/rings', [CheckoutController::class, 'rings'])->name('product.rings.page');
Route::get('/bracelet', [CheckoutController::class, 'bracelet'])->name('product.bracelet.page');
// ===========================================================================================


// Customers =================================================================================
Route::group(['prefix' => '/customer'], function ()
{

    Route::get('/register',[Customer_registercontroller::class,'view']);
    Route::post('/register', [Customer_registercontroller::class,'register'])->name('register');
    Route::get('/view', [Customer_registercontroller::class,'table'])->name('customer.table');
    Route::get('/edit/{id}', [Customer_registercontroller::class,'edit'])->name('customer.edit');
    Route::post('/update/{id?}', [Customer_registercontroller::class,'update'])->name('customer.update');
    Route::get('/delete/{id}', [Customer_registercontroller::class,'delete'])->name('delete');
    Route::get('/restore/{id}', [Customer_registercontroller::class,'restore'])->name('restore');
    Route::get('/force/{id}', [Customer_registercontroller::class,'forceDelete'])->name('forceDelete');
    Route::get('/trash', [Customer_registercontroller::class,'trash']);

});

//=============================================================================================

//Admin========================================================================================
Route::group(['prefix' => '/admin'], function()
{
    Route::get('/view', [Admincontroller::class,'Admintable'])->name('admin.table');
    Route::get('/register', [Admincontroller::class,'Adminview']);
    Route::post('/register', [Admincontroller::class,'Adminregister'])->name('admin.register');
    Route::get('/edit/{id}', [Admincontroller::class, 'edit'])->name('admin.edit');
    Route::post('/update/{id}', [Admincontroller::class, 'update'])->name('admin.update');
    Route::get('/login', [Admincontroller::class,'login'])->name('admin.login');
    Route::post('/login', [Admincontroller::class, 'makelogin'])->name('admin.makelogin');
    Route::get('/forgot', [Admincontroller::class, 'forgot'])->name('admin.forgot');

    });

    // ---- Middleware
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard',[dashboardcontroller::class,'dashboard'])->name('dashboard');
        Route::get('/logout', [Admincontroller::class, 'logout'])->name('admin.logout');

    });

//=============================================================================================

//Products Category============================================================================
Route::group(['prefix' => '/category'], function()
{
    Route::get('/register',[CategoryController::class, 'viewCategory'])->name('create.category');
    Route::post('/register', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/view', [CategoryController::class, 'create'])->name('create.category.table');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/trash/{id}', [CategoryController::class, 'trash'])->name('category.trash');
    Route::get('/trash', [CategoryController::class, 'trashPage'])->name('create.trash.page');
    Route::get('/restore/{id}', [CategoryController::class, 'restore'])->name('restore.category');
    Route::get('/delete/{id}', [CategoryController::class, 'forceDelete'])->name('category.force.delete');

});

//==============================================================================================

//Products======================================================================================
Route::group(['prefix' => '/product'], function () {
    Route::get('/register', [ProductController::class, 'create'])->name('create.product');
    Route::post('/register', [ProductController::class, 'store'])->name('store.product');
    Route::get('/view', [ProductController::class, 'table'])->name('create.product.table');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit.product');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('update.product');
    Route::get('/trash', [ProductController::class, 'trashPage'])->name('create.trash.product');
    Route::get('/trash/{id}', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.force.delete');
    Route::get('/details/{id}', [ProductController::class, 'details'])->name('product.extra.details');
    Route::post('/details/{id}', [ProductController::class, 'storeDetails'])->name('product.store.extra.details');


});

//================================================================================================

