<?php

namespace App\Livewire;

use App\Models\ConstructionWorkModel;
use Livewire\Component;

class ConstructionWorkUser extends HeaderNavUser
{
    public function render()
    {
        $materials = ConstructionWorkModel::all();
        return view('livewire.construction-work-user', ['materials' => $materials]);
    }
}
