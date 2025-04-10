<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlShorteningController;

Route::post('/shorten', [UrlShorteningController::class, 'store']);
Route::get('/decode/{shortenedUrl}', [UrlShorteningController::class, 'decode']);