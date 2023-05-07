<?php

use App\Models\Product;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// PRODUCTS (ADMIN)
    //show create product - show form
    route::get('/create_product', [ProductController::class,'create']);
    
    //store product
    route::post('/add_product', [ProductController::class,'store'])->name('create_product');
    
    //show all products
    route::get('/show_product', [ProductController::class,'index']);
    
    //delete product
    route::get('/delete_product/{id}', [ProductController::class,'delete_product']);
    
    //show all products
    route::get('/show_product/archive', [ProductController::class,'show_archive']);
    
    //restore product
    route::get('/restore_product/{id}', [ProductController::class,'restore_product']);

    //show edit form
    route::get('/edit_product/{id}', [ProductController::class,'edit_product']);

    //update product
    route::put('/edit_product/{product}', [ProductController::class,'update_product']);


//CATEGORIES (ADMIN)
    //show all categories and form
    route::get('/view_category', [CategoryController::class,'view_category']);

    //add or store category
    route::post('/add_category', [CategoryController::class,'add_category']);

    //delte category (should be soft delete: to be updated)
    route::get('/delete_category/{id}', [CategoryController::class,'delete_category']);


//Show Dashboard
    route::get('/redirect', [HomeController::class,'redirect'])->middleware('auth','verified');



// route::get('/update_product/{id}', [AdminController::class,'update_product']);

// route::post('/update_product_confirm/{id}', [AdminController::class,'update_product_confirm']);




route::get('/order', [AdminController::class,'order']);

route::get('/delivered/{id}', [AdminController::class,'delivered']);

route::get('/print/{id}', [AdminController::class,'print']);

route::get('/send_email/{id}', [AdminController::class,'send_email']);

route::post('/send_user_email/{id}', [AdminController::class,'send_user_email']);

route::get('/search', [AdminController::class,'searchdata']);

route::get('/customer', [AdminController::class,'customer']);

route::get('/admin_account', [AdminController::class,'admin_account']);

route::get('/customer_account', [AdminController::class,'customer_account']);

route::get('/delivered', [AdminController::class,'isdelivered']);

route::get('/processing', [AdminController::class,'processing']);

route::get('/detailed_orders', [AdminController::class,'detailed_orders']);


// Home Controller

route::get('/product_details/{id}', [HomeController::class,'product_details']);

route::post('/add_cart/{id}', [HomeController::class,'add_cart']);

route::get('/show_cart', [HomeController::class,'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class,'remove_cart']);

route::get('/cash_order', [HomeController::class,'cash_order']);

route::get('/stripe/{totalprice}', [HomeController::class,'stripe']);

Route::post('stripe/{totalprices}',[HomeController::class, 'stripePost'])->name('stripe.post');

route::get('/show_order', [HomeController::class,'show_order']);

route::get('/cancel_order/{id}', [HomeController::class,'cancel_order']);

route::get('/product_search', [HomeController::class,'product_search']);

route::get('/products', [HomeController::class,'products']);

route::get('/search_product', [HomeController::class,'search_product']);

route::get('/book_now', [HomeController::class,'book_now']);

