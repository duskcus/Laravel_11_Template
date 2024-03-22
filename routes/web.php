<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::resources([
    'products' => ProductController::class,
]);

Route::get('/api', [ProductController::class, 'apiList'])->name('api');

