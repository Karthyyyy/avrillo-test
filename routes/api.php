<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuoteController;

Route::get('/quotes', [QuoteController::class, 'index']);
