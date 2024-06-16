<?php

namespace App\Livewire;

use Livewire\Component;

class GameList extends Component
{
    public $games;

    public function mount()
    {
        $this->games = config('games');
    }

    public function render()
    {
        return view('livewire.game-list');
    }
}

