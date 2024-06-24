<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

Route::get('/', function () {
    return view('layout');
});

Route::get('/myurl', function () {
    return view('myview');
});

Route ::get('/myurll',[myController::class,'index']);
