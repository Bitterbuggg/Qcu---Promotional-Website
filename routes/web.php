<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GameplayController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// ABOUT
Route::prefix('about')->name('about.')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('index');
    Route::get('/synopsis', [AboutController::class, 'synopsis'])->name('synopsis');
    Route::get('/chapters', [AboutController::class, 'chapters'])->name('chapters');
    Route::get('/characters', [AboutController::class, 'characters'])->name('characters');
    Route::get('/map', [AboutController::class, 'map'])->name('map');
});

// GAMEPLAY
Route::prefix('gameplay')->name('gameplay.')->group(function () {
    Route::get('/', [GameplayController::class, 'index'])->name('index');
    Route::get('/link', [GameplayController::class, 'link'])->name('link');
    Route::get('/preview', [GameplayController::class, 'preview'])->name('preview');
    Route::get('/mechanics', [GameplayController::class, 'mechanics'])->name('mechanics');
});

// NEWS & UPDATES
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// THE TEAM
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
