<?php

use App\Livewire\Auth\Login;
use App\Livewire\Admin\Dashboard;
use Illuminate\Support\Facades\Route;


Route::get('/login', Login::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::post('/logout', function () {
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');
});
