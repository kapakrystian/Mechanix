<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClientController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome', ['heading' => 'Home']);
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

    Route::post('/logout', [SessionController::class, 'destroy']);

    Route::resource('/clients', ClientController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);

});


