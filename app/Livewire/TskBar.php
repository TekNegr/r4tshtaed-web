<?php

namespace App\Livewire;

use Livewire\Component;

class TskBar extends Component
{
    public $files = ['Explorateur', 'Terminal', 'Paramètres'];

    public function open($file)
    {
        $this->emit('openWindow', $file);
    }

    public function render()
    {
        return view('livewire.tsk-bar');
    }
}