<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


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

Route::get('/dashboard', function () {
    return view('front.welcome');
})->name('dashboard')->middleware('auth');
Route::get('/', function (){
    return view('front.home.home');
})->name('home');

Route::get('/about', function (){
    return view('home.about');
})->name('about');

Route::get('/product', function (){
    return view('home.product');
})->name('product');



Route::get('/advice', [AdviceController::class, 'advice_page'])->name('advice.page');


Route::get('category', [CategoryController::class, 'index'])-> name('category.index');
Route::post('category', [CategoryController::class, 'store']) -> name("category.store");
Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('login', [Authenticate::class, 'showLoginForm'])->name('login');
Route::post('login', [Authenticate::class, 'login']);
Route::post('logout', [Authenticate::class, 'logout'])->name('logout');

Route::resource('blogs', BlogController::class);

Route::resource('advices', AdviceController::class);

Route::resource('products', ProductController::class);


Route::resource('stocks', StockController::class);




Route::get('cart', [CartController::class, 'index'])->name('cart.index');

Route::get('order', [OrderController::class, 'index'])->name('orders.index');
Route::post('order', [OrderController::class, 'store'])->name('orders.store');



Route::get('orders', [\App\Http\Controllers\OrderLineController::class, 'index'])->name('orders_list.index');
Route::post('orders', [\App\Http\Controllers\OrderLineController::class, 'store'])->name('orders_list.store');
