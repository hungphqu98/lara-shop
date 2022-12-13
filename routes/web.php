<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('blog', [HomeController::class, 'blog'])->name('blog');

Route::get('blog-details', [HomeController::class, 'blogDetails'])->name('blog.details');

Route::get('contact', [HomeController::class, 'about'])->name('contact');

Route::get('shop', [HomeController::class, 'shop'])->name('shop');

Route::get('shop-details', [HomeController::class, 'shopDetails'])->name('shop.details');

Route::get('checkout', [HomeController::class, 'checkout'])->name('checkout');

Route::get('shopping-cart', [HomeController::class, 'shoppingCart'])->name('shoppingcart');

Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');

