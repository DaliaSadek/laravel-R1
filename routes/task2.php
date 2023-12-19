<?php

use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});


Route::get('contact us', function () {
    return view('welcome');
});


Route::get('support', function () {
    return view('welcome');
});