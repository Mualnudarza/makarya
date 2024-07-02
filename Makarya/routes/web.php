<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/a', function(){
    return view('index');
})->name('index');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

require __DIR__.'/auth.php';
