<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\mahasiswacontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', mahasiswacontroller::class);