<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/leistungen', [PageController::class, 'leistungen'])->name('leistungen');
Route::get('/preise', [PageController::class, 'preise'])->name('preise');
Route::get('/netzwerk', [PageController::class, 'netzwerk'])->name('netzwerk');
Route::get('/ueber-uns', [PageController::class, 'ueberUns'])->name('ueber-uns');
Route::get('/kontakt', [PageController::class, 'kontakt'])->name('kontakt');
Route::post('/kontakt', [PageController::class, 'kontaktSend'])->name('kontakt.send');

Route::get('/datenschutz', [PageController::class, 'datenschutz'])->name('datenschutz');
Route::get('/impressum', [PageController::class, 'impressum'])->name('impressum');
Route::get('/erstinformation', [PageController::class, 'erstinformation'])->name('erstinformation');
