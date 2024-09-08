<?php

namespace App\Livewire;

use Livewire\Component;

class Master extends Component
{
    public bool $cmodal = false;
    public $per_page = 5;
    public $search = '';

    /* public function __construct()
    {
        $this->per_page = 5;
    } */
    public function open_modal()
    {
        $this->cmodal = true;
    }
    public function close_modal()
    {
        $this->cmodal = false;
        $this->resetValidation();
        $this->reset();
    }
    public function render()
    {
        return view('livewire.master');
    }
}
