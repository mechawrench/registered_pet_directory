<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PetDetails extends Component
{
    public $pet;

    public function mount($pet_id)
    {
        $this->pet = \App\Models\Pet::find($pet_id);
    }

    public function render()
    {
        return view('livewire.pet-details');
    }
}
