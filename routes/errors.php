<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/401', function () {
    return view('errors.401');  // resources/views/
});

Route::get('/402', function () {
    return view('errors.402');  // resources/views/
});

Route::get('/403', function () {
    return view('errors.403');  // resources/views/
});

Route::get('/404', function () {
    return view('errors.404');  // resources/views/
});

Route::get('/419', function () {
    return view('errors.419');  // resources/views/
});

Route::get('/429', function () {
    return view('errors.429');  // resources/views/
});

Route::get('/500', function () {
    return view('errors.500');  // resources/views/
});

Route::get('/503', function () {
    return view('errors.503');  // resources/views/
});
