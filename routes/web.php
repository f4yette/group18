<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/basket', 'basket');
Route::view('/signup', 'signup');
Route::view('/account', 'account');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/rackets', 'rackets');
Route::view('/sportswear', 'sportswear');
Route::view('/bags', 'bags');
Route::view('/shoes', 'shoes');
Route::view('/balls', 'balls');
Route::view('/services', 'services');

Route::view('/terms', 'terms');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/cookies', 'cookies');
Route::view('/delivery-information', 'delivery-information');
Route::view('/returns', 'returns');