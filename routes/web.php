<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('pelanggan.home');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/createadmin', [AdminController::class, 'create']);

