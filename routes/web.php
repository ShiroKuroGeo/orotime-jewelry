<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

// Index Page
Route::get('/', function () { return view('welcome'); });
Route::get('/', function () { return view('welcome'); })->name('back');

// Authentication Page
Route::get('login', function () { return view('login'); })->name('login');
Route::get('registration', function () { return view('register'); })->name('register');
Route::get('notFound', function () { return view('notFound'); });
Route::get('logout', [Controller::class,'logout'])->name('logout');

// Customer Views
Route::get('home', function(){ return view('customer/homepage'); })->name('homepage');

// Guest Purchaser
Route::get('order-product-guest/{pid}', function (){ return view('guest/buy'); })->name('guestPurchaser');

// Admin
Route::get('admin/dashboard', function () { return view('admin/dashboard'); });