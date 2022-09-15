<?php

namespace App\Http\Livewire;

use App\Models\Pet;
use Livewire\Component;
use Livewire\WithPagination;

class Pets extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pets', [
            'pets' => Pet::paginate(5),
        ]);
    }
}
