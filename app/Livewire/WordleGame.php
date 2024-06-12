<?php

namespace App\Livewire;

use Livewire\Component;

class WordleGame extends Component
{
    public $message = 'Hello, World!';

    public function render()
    {
        return view('livewire.wordle-game');
    }
}
