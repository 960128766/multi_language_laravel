<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\LanguageController::class, 'index'])->name('home');
Route::get('lan-change', [\App\Http\Controllers\LanguageController::class, 'language'])->name('lan.change');
