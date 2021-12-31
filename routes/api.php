<?php

use Illuminate\Support\Facades\Route;
use Llabbasmkhll\ArtisanRoute\Http\Controllers\ArtisanController;

Route::post('/run', [ArtisanController::class, 'store'])->name('artisan.run');
