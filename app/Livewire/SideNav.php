<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SideNav extends Component
{
    public function admin_logout()
    {
        Auth::logout();
        return redirect()->route('adminLogin');
    }
    public function render()
    {
        return view('livewire.side-nav');
    }
}
