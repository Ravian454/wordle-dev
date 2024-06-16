<?php
use App\Livewire\WordleGame;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/games/{slug}', function ($slug) {
    $games = config('games');

    if (!array_key_exists($slug, $games)) {
        abort(404);
    }

    $game = $games[$slug];
    
    return view('game', [
        'title' => $game['title'],
        'gameUrl' => $game['gameUrl'],
        'description' => $game['description']
    ]);
})->name('games.show');