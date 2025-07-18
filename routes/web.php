<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('community', function () {
    return view('community');
})->name('community');


Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('event', function () {
    return view('event');
})->name('event');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/reportWaste', function () {
    return view('reportWaste');
})->name('reportWaste');
