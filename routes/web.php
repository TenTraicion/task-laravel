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

Route::get('/', function () {
    return view('index', [
        'name' => 'Laravel 10',
    ]); 
});

Route::get('/laravel', function () {
    return view('welcome');  // resources/views/welcome.blade.php
});

Route::get('/hello', function () {
    return 'Hello World';
})->name('hello');

Route::get('/halo', function () {
    return redirect()->route('hello');
});

Route::get('/user/{id}', function ($id) {
    return 'User: '.$id;
});

Route::get('/401', function () {
    return view('401');  // resources/views/
});

Route::get('/402', function () {
    return view('402');  // resources/views/
});

Route::get('/403', function () {
    return view('403');  // resources/views/
});

Route::get('/404', function () {
    return view('404');  // resources/views/
});

Route::get('/419', function () {
    return view('419');  // resources/views/
});

Route::get('/429', function () {
    return view('429');  // resources/views/
});

Route::get('/500', function () {
    return view('500');  // resources/views/
});

Route::get('/503', function () {
    return view('503');  // resources/views/
});

Route::get('/layout', function () {
    return view('layout');  // resources/views/
});

Route::get('/minimal', function () {
    return view('minimal');  // resources/views/
});