<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::view('correo3', 'correos.correo3')->name('correo3');
    Route::view('correo4', 'correos.correo4')->name('correo4');
});

require __DIR__.'/settings.php';