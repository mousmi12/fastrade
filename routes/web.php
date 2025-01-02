<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/dgcargo', function () {
    return view('dgcargo');
})->name('dgcargo');
Route::get('/connectus', function () {
    return view('connectus');
})->name('connectus');
Route::get('/discoverus', function () {
    return view('discoverus');
})->name('discoverus');
