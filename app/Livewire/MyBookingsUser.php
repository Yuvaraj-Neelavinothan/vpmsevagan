<?php

namespace App\Livewire;

use App\Models\VpmServiceBooking;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class MyBookingsUser extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $customer;
    public function boot()
    {
        $this->customer = Auth::guard('customer')->user();
    }
    public function change_booking_status($s_id)
    {
        try {
            $my_service = VpmServiceBooking::findOrFail($s_id);
            $my_service->booking_status = "Cancelled";
            $my_service->save();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function render()
    {
        $booking_services = VpmServiceBooking::where('customer_id', $this->customer->id)->latest()->paginate(5);
        return view('livewire.my-bookings-user', ["my_booking_services" => $booking_services]);
    }
}
