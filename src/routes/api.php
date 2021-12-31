<?php

use Illuminate\Support\Facades\Route;
use Llabbasmkhll\ArtisanRoute\Http\Controllers\ArtisanController;

Route::get('/artisan', [ArtisanController::class, 'store'])->name('artisan');
