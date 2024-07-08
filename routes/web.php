<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title'=> "SISTEM PAKAR KECANDUAN GAME ONLINE"]);
});

Route::get('/hasil', function () {
    return view('hasil', ['title'=> "HASIL"]);
});

Route::get('/deteksi', [QuestionController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);