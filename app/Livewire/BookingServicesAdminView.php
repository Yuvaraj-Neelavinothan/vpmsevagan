<?php

namespace App\Livewire;

use App\Models\VpmServiceBooking;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class BookingServicesAdminView extends Master
{
    use WithPagination, WithoutUrlPagination;
    public function change_booking_status($s_id, $b_status)
    {
        try {
            $service = VpmServiceBooking::findOrFail($s_id);
            $service->booking_status = $b_status;
            $service->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function change_payment_status($s_id, $p_status)
    {
        try {
            $service = VpmServiceBooking::findOrFail($s_id);
            $service->payment_status = $p_status;
            $service->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
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
