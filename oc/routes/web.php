<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', fn() => view('pages.home'))->name('home');
Route::get('/projekte', fn() => view('pages.projekte'))->name('projekte');
Route::get('/ueber-uns', fn() => view('pages.ueber-uns'))->name('ueber-uns');
Route::get('/kontakt', fn() => view('pages.kontakt'))->name('kontakt');
Route::post('/kontakt', [ContactController::class, 'send'])->name('kontakt.send');
