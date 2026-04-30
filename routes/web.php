<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Presensi;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return redirect('/dashboard/login');
})->name('login');

Route::get('/presensi', Presensi::class)->middleware('auth');