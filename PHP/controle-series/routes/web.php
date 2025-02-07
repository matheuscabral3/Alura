<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    // return view('welcome');
    echo "Olá, Mundo!";
});
