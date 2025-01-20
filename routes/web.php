<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PasifController;
use App\Http\Controllers\NewsletterController;
use App\Http\Middleware\EnsureProductIdValid;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('/products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products.list');
    Route::get('/create', 'create')->name('products.create');
    Route::post('/store', 'store')->name('products.store');
    // Route::middleware(EnsureProductIdValid::class)->group(function() {
    Route::middleware('productValid')->group(function () {
        Route::get('/edit/{id}', 'edit')->name('products.edit')->middleware('can:is-admin');
        Route::post('/update/{id}', 'update')->name('products.update')->middleware('can:is-admin');
        Route::post('/destroy/{id}', 'destroy')->name('products.destroy')->middleware('can:is-admin');
        Route::get('/show/{id}', 'show')->name('products.show');
    });
});

Route::prefix('/categories')->controller(CategoryController::class)->middleware('can:is-admin')->group(function () {
    Route::get('/', 'index')->name('categories.list');
    Route::get('/create', 'create')->name('categories.create');
    Route::post('/store', 'store')->name('categories.store');
    Route::get('/edit/{id}', 'edit')->name('categories.edit');
    Route::post('/update/{id}', 'update')->name('categories.update');
    Route::post('/destroy/{id}', 'destroy')->name('categories.destroy');
});

Route::prefix('/registration')->controller(RegistrationController::class)->middleware('guest')->group(function () {
    Route::get('/', 'index')->name('registration');
    Route::post('/store', 'store')->name('registration.store');
});

Route::prefix('/login')->controller(LoginController::class)->middleware('guest')->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/store', 'store')->name('login.store');
});

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::prefix('/cart')->controller(CartController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('cart.list');
    Route::post('/add-to-cart', 'addToCart')->name('cart.add-to-cart');
    Route::post('/remove-from-cart/{id}', 'removeFromCart')->name('cart.destroy');
    Route::post('/update-quantity/{id}', 'updateQuantity')->name('cart.update');
    Route::get('/checkout', 'checkout')->name('cart.checkout');
    Route::post('/checkout', 'processCheckout')->name('cart.processCheckout');
    Route::post('/buy-now', 'processBuyNow')->name('cart.processBuyNow');
});

Route::get('/my-profile', [ProfileController::class, 'index'])->middleware('auth')->name('my-profile');
Route::post('/my-profile', [ProfileController::class, 'update'])->middleware('auth')->name('my-profile.update');

Route::prefix('/favourite')->controller(FavouriteController::class)->middleware('auth')->group(function () {
    Route::get('/', 'index')->name('favourite.list');
    Route::post('/add-to-favourite', 'addToFavourite')->name('favourite.add-to-favourite');
    Route::post('/remove-from-favourite/{id}', 'removeFromFavourite')->name('favourite.destroy');
});

Route::get('/purchase-history', [CartController::class, 'purchaseHistory'])->middleware('auth')->name('purchase-history');

Route::prefix('/discount')->controller(DiscountController::class)->middleware('auth', 'can:is-admin')->group(function () {
    Route::get('/', 'index')->name('discount.list');
    Route::get('/create', 'create')->name('discount.create');
    Route::post('/store', 'store')->name('discount.store');
    Route::get('/edit/{id}', 'edit')->name('discount.edit');
    Route::post('/update/{id}', 'update')->name('discount.update');
    Route::post('/destroy/{id}', 'destroy')->name('discount.destroy');
});

Route::prefix('/user')->controller(UserController::class)->middleware('auth', 'can:is-admin')->group(function () {
    Route::get('/', 'index')->name('user.list');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/store', 'store')->name('user.store');
    Route::get('/edit/{id}', 'edit')->name('user.edit');
    Route::post('/update/{id}', 'update')->name('user.update');
    Route::post('/destroy/{id}', 'destroy')->name('user.destroy');
});

Route::prefix('/pasif')->controller(PasifController::class)->middleware('auth')->group(function () {
    Route::get('/about', 'about')->name('pasif.about');
    Route::get('/term', 'term')->name('pasif.term');
    Route::get('/privacy', 'privacy')->name('pasif.privacy');
});

Route::post('/newsletter/send_email', [NewsletterController::class, 'send_email'])->name('newsletter.send_email');
