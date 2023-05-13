<?php

use App\Http\Controllers\Admin\Social\CreateSocialController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');

    Route::get('/socials/create', CreateSocialController::class)->name('social.create');
});
