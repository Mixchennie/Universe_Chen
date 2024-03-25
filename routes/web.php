<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/login', function () {
    return view('customer.account.login');
});

Route::get('/register', function () {
    return view('customer.account.register');
});


Route::prefix('products')->name('showProducts')->group(function () {
    Route::get('/', [ProductController::class, 'getProducts']);
    Route::get('/{id_categories}', [ProductController::class, 'getProducts']);
});

Route::get('product/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

require __DIR__ . '/auth.php';

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{itemId}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove/{itemId}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');

require __DIR__.'/auth.php';

Route::prefix('customer')->group(function(){
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

});

Route::prefix('admin')->group(function(){});

