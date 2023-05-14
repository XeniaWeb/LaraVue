<?php

use App\Http\Controllers\Admin\Social\CreateSocialController;
use App\Http\Controllers\Admin\Social\StoreSocialController;
use App\Http\Controllers\Admin\Social\IndexController as SocialController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');

    Route::get('/socials/create', CreateSocialController::class)->name('social.create');
    Route::post('/socials/store', StoreSocialController::class)->name('social.store');
    Route::get('/socials', SocialController::class)->name('social.index');
});
