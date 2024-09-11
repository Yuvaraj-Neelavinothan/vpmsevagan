<?php

namespace App\Livewire;

use App\Models\ProWorkerModel;
use Livewire\Component;

class ProWorkerUser extends HeaderNavUser
{
    public function render()
    {
        $proworkers = ProWorkerModel::all();
        return view('livewire.pro-worker-user', ['proworkers' => $proworkers]);
    }
}
