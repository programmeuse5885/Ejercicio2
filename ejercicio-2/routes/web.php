<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    return view('initial');
});

Route::get('class', function(){
    return view('class');
});

Route::get('products', function () {
    return view('products');
});

Route::get('clients', function () {
    return view('clients');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
});