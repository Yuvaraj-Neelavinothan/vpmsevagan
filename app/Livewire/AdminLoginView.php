<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AdminLoginView extends Component
{
    #[Validate('required')]
    public $admin_name;
    #[Validate('required')]
    public $password;
    public function authenticate()
    {
        $this->validate();
        if (Auth::attempt(['name' => $this->admin_name, 'password' => $this->password])) {
            $user = User::where('name', $this->admin_name)->first();
            Auth::login($user);
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('authfailed', 'Admin name or Password is incorrect.');
        }
    }
    public function render()
    {
        return view('livewire.admin-login-view');
    }
}
