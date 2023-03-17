<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/orderManagement', function () {
    return view('orderManagement');
});

Route::get('/pending-orders', function () {
    return view('pendingOrders');
});

Route::get('/all-orders', function () {
    return view('orderManagement');
});

Route::get('/returned-orders', function () {
    return view('returnedOrders');
});

Route::get('/sold-orders', function () {
    return view('soldOrders');
});

Route::get('/canceled-orders', function () {
    return view('canceledOrders');
});