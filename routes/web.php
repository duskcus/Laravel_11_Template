<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketController;

Route::get('/', function () {
    return view('index');
}) -> name("home");

Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
}) -> name("about");

Route::get('/services', function () {
    return view('services');
}) -> name("services");

Route::get('/contact', function () {
    return view('contact');
}) -> name("contact");

Route::get('/account', function () {
    return view('account.index');
}) -> name("account");

Route::resources([
    'products' => ProductController::class,
    'market' => MarketController::class,
]);

Route::get('/api', [ProductController::class, 'apiList'])->name('api');

