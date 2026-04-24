<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Presensi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/presensi', Presensi::class)->middleware('auth');