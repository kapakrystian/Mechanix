<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
