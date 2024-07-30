<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\Authenticate;

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

Route::get('/', function () {
    return view('welcome');
})->name('dashboard')->middleware('auth');

Route::get('category', [CategoryController::class, 'index'])-> name('category.index');
Route::post('category', [CategoryController::class, 'store']) -> name("category.store");
Route::put('category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


Route::get('login', [Authenticate::class, 'showLoginForm'])->name('login');
Route::post('login', [Authenticate::class, 'login']);
Route::post('logout', [Authenticate::class, 'logout'])->name('logout');

Route::resource('blogs', BlogController::class);
