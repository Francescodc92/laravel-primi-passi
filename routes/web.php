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
    $data = [
        'message'=> 'hello blade from Home page '
    ];
    return view('home', $data);
})->name('home');

Route::get('/info', function () {
    $data = [
        'message'=> 'hello blade from Info page '
    ];
    return view('about', $data);
})->name('about');

Route::get('/contatti', function () {
    $data = [
        'message'=> 'hello blade from contact page '
    ];
    return view('contact', $data);
})->name('contact');

Route::get('/prodotti', function () {
    $data = [
        'message'=> 'hello blade from products page '
    ];
    return view('products', $data);
})->name('products');
