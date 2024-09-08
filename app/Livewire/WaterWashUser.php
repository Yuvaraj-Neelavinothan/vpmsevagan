<?php

namespace App\Livewire;

use App\Models\WaterWashModel;
use Livewire\Component;

class WaterWashUser extends HeaderNavUser
{
    public function render()
    {
        $water_washes = WaterWashModel::all();
        return view('livewire.water-wash-user', ['washes' => $water_washes]);
    }
}
