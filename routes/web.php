<?php

use App\Http\Controllers\ScraperController;
use Illuminate\Support\Facades\Route;

Route::get('scraper', [ScraperController::class, 'index'])->name('scraper');
