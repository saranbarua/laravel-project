<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('backend.home');
});
Route::get('/register', function () {
    return view('backend.home');
});

Route::get('/product', [ProductController::class, 'show'])->name('user.show');


Route::get('/home', function () {
    return view('backend.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//users
Route::get('/users',[LoginController::class, 'index'])->name('users.index');

Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/products',[ProductController::class, 'store'])->name('products.store');
Route::get('edit-product/{id}', [ProductController::class, 'edit']);
Route::put('update-product/{id}', [ProductController::class, 'update']);

Route::get('delete-product/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('/product-add', function () {
    return view('backend.products');
});

Route::get('/category-add', function () {
    return view('backend.categories');
});
Route::get('/', function () {
    return view('ecommerce.index');
});
Route::get('/product', function () {
    return view('ecommerce.product');
});
Route::get('/product-detail', function () {
    return view('ecommerce.product_detail');
});
Route::get('/sign-up', function () {
    return view('ecommerce.sign_up');
});
Route::get('/log-in', function () {
    return view('ecommerce.log_in');
});
Route::get('/cart', function () {
    return view('ecommerce.cart');
});
Route::get('/checkout', function () {
    return view('ecommerce.checkout');
});