<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
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

//Route::get('/dashboard', function () {
//    return view('admin.welcome');
//})->name('dashboard')->middleware('auth');
Route::get('/dashboard', [\App\Http\Controllers\OrderLineController::class, 'dashboard_page'])->name('dashboard')->middleware('auth');
Route::get('/', function (){
    return view('front.home.home');
})->name('home');

Route::get('/about', function (){
    return view('front.about.index');
})->name('about');
Route::get('/contact', function (){
    return view('front.contact.index');
})->name('contact');






Route::get('category', [CategoryController::class, 'index'])-> name('category.index');
Route::post('category', [CategoryController::class, 'store']) -> name("category.store");
Route::get('/cart', [CartController::class, 'show'])->name('cart.show');
Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category/{id}', [CategoryController::class, 'showPage'])->name('category.showPage');


Route::get('cart', [CartController::class, 'showCart'])->name('cart.index');
Route::post('cart/add/{id}', [CartController::class, 'addProductToCart'])->name('cart.addItem');
Route::post('/cart/updateQuantity', [CartController::class, 'updateCartProductQuantity'])->name('cart.updateQuantity');
Route::post('/cart/remove', [CartController::class, 'removeProductFromCart'])->name('cart.remove');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

Route::put('/orders/{orderId}/status', [OrderController::class, 'updateOrderStatus'])->name('orders.updateStatus');
Route::post('/update-stock', [OrderController::class, 'updateStock']);


Route::get('login', [Authenticate::class, 'showLoginForm'])->name('login');
Route::post('login', [Authenticate::class, 'login']);
Route::post('logout', [Authenticate::class, 'logout'])->name('logout');
Route::get('user/{id}', [Authenticate::class, 'showUserProfile'])->name('users.edit');
Route::put('user/{id}', [Authenticate::class, 'updateUserProfile'])->name('users.update');

Route::get('/blog', [BlogController::class, 'blogs_page'])->name('blog.page'); // Change the URL to avoid conflict
Route::resource('blogs', BlogController::class);
Route::get('/blog/{blog}/details', [BlogController::class, 'blog_details_page'])->name('blog.details'); // Change the URL to avoid conflict



Route::resource('advices', AdviceController::class);
Route::get('/advice', [AdviceController::class, 'advice_page'])->name('advice.page');
Route::get('/advice/{advice}', [AdviceController::class, 'advice_details_page'])->name('advice.details');

Route::resource('products', ProductController::class);
Route::get('/product', [ProductController::class, 'product_page'])->name('product.page');
Route::get('/product/{product}', [ProductController::class, 'product_details_page'])->name('product.details');


Route::resource('stocks', StockController::class);





Route::get('order', [OrderController::class, 'index'])->name('orders.index');
Route::post('order', [OrderController::class, 'store'])->name('orders.store');



Route::get('orders', [\App\Http\Controllers\OrderLineController::class, 'index'])->name('orders_list.index');
Route::post('orders', [\App\Http\Controllers\OrderLineController::class, 'store'])->name('orders_list.store');

Route::get('clients', [\App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::put('clients/{client}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('clients/{client}', [ClientController::class, 'destroy'])->name('clients.destroy');



Route::get('/{lang}', function ($lang){
    session()->put(['lang'=>$lang]);
    return back();
})->where('lang', 'en|ru|uz');
