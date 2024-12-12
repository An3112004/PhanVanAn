<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bai1Controller;
use App\Http\Controllers\Bai2Controller;
use App\Http\Controllers\Bai3Controller;
use App\Http\Controllers\Bai4Controller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/bai1', [Bai1Controller::class, 'index'])->name('bai1.index');

Route::get('/bai2', [Bai2Controller::class, 'index'])->name('bai2.index');

Route::get('/bai3', [Bai3Controller::class, 'index'])->name('bai3.index');

Route::get('/bai4', [Bai4Controller::class, 'index'])->name('bai4.index');
