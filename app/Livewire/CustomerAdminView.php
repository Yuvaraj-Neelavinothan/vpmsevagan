<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class CustomerAdminView extends Master
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        $customers = Customer::latest()->paginate($this->per_page);
        return view('livewire.customer-admin-view', ['customers' => $customers]);
    }
}
