<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');