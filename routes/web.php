<?php

use App\Http\Controllers\libro\libroController;
use App\Http\Controllers\libro\libroLiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/libro',libroController::class)->names('libro');
    Route::resource('/libroLive',libroLiveController::class)->names('libroLive');
});
