<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
})->name('back');

Route::get('home', function () {
    return view('customer/homepage');
})->name('homepage');

Route::get('admin/orotime/dashboard', function () {
    return view('admin/dashboard');
})->name('admin');

Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/registration', function () {
        return view('register');
    })->name('register');
    Route::get('/notFound', function () {
        return view('notFound');
    });
    Route::get('/logout', [Controller::class, 'logout'])->name('logout');
});

Route::prefix('guest')->group(function () {
    Route::get('/order/product/{pid}', function () {
        return view('/buy');
    })->name('guestPurchaser');
    Route::get('product/view/{pid}', function () {
        return view('/viewProduct');
    })->name('viewProduct');
    Route::get('product/category/{cat}', function () {
        return view('/category');
    })->name('CategoryProduct');
});

Route::prefix('admin/orotime/product')->group(function () {
    Route::get('/add', function () {
        return view('admin/product/add');
    })->name('product-add');
    Route::get('/list/{cate}', function () {
        return view('admin/product/products');
    })->name('product-list');
    Route::get('/category', function () {
        return view('admin/product/category');
    })->name('product-category');
    Route::get('/details/{pid}', function () {
        return view('admin/product/details');
    })->name('product-details');
});

Route::prefix('admin/orotime/users')->group(function () {
    Route::get('/list', function () {
        return view('admin/user/list');
    })->name('user-list');
    Route::get('/type/{type}', function () {
        return view('admin/user/type');
    })->name('user-type');
    Route::get('/details/{uid}', function () {
        return view('admin/user/details');
    })->name('user-details');
});

Route::get('admin/orotime/users/list', function () {
    return view('admin/user/add');
})->name('user-list');