<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LocationComponent extends Component
{
    public $listeners = ['refreshComponent' => '$refresh'];

    public function render()
    {
        return view('livewire.location-component')->layout('layouts.base');
    }
}
