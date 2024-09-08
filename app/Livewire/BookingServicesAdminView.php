<?php

namespace App\Livewire;

use App\Models\VpmServiceBooking;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BookingServicesAdminView extends Master
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        if (!empty($this->search)) {
            $booking_services = VpmServiceBooking::where('service_name', 'like', '%' . $this->search . '%')->orWhere('service_code', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $booking_services = VpmServiceBooking::with('customer')->latest()->paginate($this->per_page);
        }
        return view('livewire.booking-services-admin-view', ['booking_services' => $booking_services]);
    }
}
