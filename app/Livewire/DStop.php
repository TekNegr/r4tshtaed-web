<?php

namespace App\Livewire;

use Livewire\Component;

class DStop extends Component
{
    public $openWindows = [];

    protected $listeners = ['openWindow' => 'addWindow'];

    public function addWindow($window)
    {
        if (!in_array($window, $this->openWindows)) {
            $this->openWindows[] = $window;
        }
    }

    public function closeWindow($index)
    {
        unset($this->openWindows[$index]);
        $this->openWindows = array_values($this->openWindows);
    }

    public function render()
    {
        return view('livewire.d-stop');
    }
}

