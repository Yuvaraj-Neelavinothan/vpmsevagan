<?php

namespace App\Livewire;

use App\Models\HouseKeepingModel;
use Livewire\Component;

class HouseKeepingUser extends HeaderNavUser
{
    public function render()
    {
        $house_keeping_services = HouseKeepingModel::all();
        return view('livewire.house-keeping-user', ['hk_services' => $house_keeping_services]);
    }
}
