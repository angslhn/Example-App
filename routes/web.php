<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('index', ['title' => 'Beranda']))->name('home');
Route::get('/portfolio', fn () => view('portfolio', ['title' => 'Portfolio']))->name('portfolio');
