<?php

use App\Http\Controllers\GameController;
use App\Livewire\WordleGame;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Livewire\GameList;
use App\Livewire\HotGames;

Route::get('/', function () {
    return view('home');
});
Route::get('/games/{slug}', [GameController::class, 'show'])->name('games.show');
Route::get('/hot-games', [GameController::class, 'hotGames'])->name('games.hot');
Route::get('/new-games', [GameController::class, 'newGames'])->name('games.new');

// About page
Route::get('/about', function () {
    return view('livewire.about');
})->name('about');
