<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/', DashboardController::class)->name('dashboard');
Route::post('post/store', [TweetController::class, 'store'])->name('post.store');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
