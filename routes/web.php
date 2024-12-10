<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/products')->controller(ProductController::class)->group(function() {
    Route::get('/', 'index')->name('product.list');
    Route::get('/create', 'create')->name('product.create');
    Route::get('/edit/{id}', 'edit')->name('product.edit');
    Route::any('/store', 'store')->name('product.store');
    Route::any('/update/{id}', 'update')->name('product.update');
    Route::get('/show/{id}', 'show')->name('product.show');
    Route::get('/form', 'form')->name('product.form');
    Route::get('/list', 'list')->name('product.list');
});
