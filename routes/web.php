<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', function () {
    return view('clients.index');
});

Route::get('/services', function () {
    return view('services.index');
});

Route::get('/parts', function () {
    return view('parts.index');
});

Route::get('/payments', function () {
    return view('payments.index');
});
