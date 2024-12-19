<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bai1Controller;
use App\Http\Controllers\Bai2Controller;
use App\Http\Controllers\Bai3Controller;
use App\Http\Controllers\HomeController;

//Route::get('/', [HomeController::class, 'index']);

Route::get('/', [Bai1Controller::class, 'index'])->name('bai1.index');

Route::get('/bai1/create', [Bai1Controller::class, 'create'])->name('bai1.create');

Route::post('/bai1', [Bai1Controller::class, 'store'])->name('bai1.store');

Route::get('/bai1/{bai1}/edit', [Bai1Controller::class, 'edit'])->name('bai1.edit');

Route::put('/bai1/{bai1}', [Bai1Controller::class, 'update'])->name('bai1.update');

Route::delete('/bai1/{bai1}', [Bai1Controller::class, 'destroy'])->name('bai1.destroy');

Route::get('/bai2', [Bai2Controller::class, 'index'])->name('bai2.index');

Route::get('/bai3', [Bai3Controller::class, 'index'])->name('bai3.index');


