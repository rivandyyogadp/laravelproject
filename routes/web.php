<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'Selamat Pagi Dunia, GUEH Rivandy Yoga Dhiputra - NIM 707082300131';
});