<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', '/characters');

Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');

Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.store');

require __DIR__.'/auth.php';
