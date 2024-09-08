<?php

namespace App\Livewire;

use App\Models\AddToCart;
use App\Models\Customer;
use App\Models\VpmServiceBooking;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Session;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;

class HeaderNavUser extends Component
{
    public $service_street, $service_area, $service_city, $service_district, $service_pincode, $service_address, $price_per_unit, $quantity, $total_amount;
    #[Validate('required')]
    public $mobile_number;
    public $otp_receive, $otp_sent;
    public bool $is_open_login = false;
    #[Session]
    public $cart_counter;

    public $cart_items;

    public function __construct()
    {
        $this->cart_counter = 0;
    }
    public function add_to_cart($cart_item)
    {
        $customer = Auth::guard('customer')->user();
        if ($customer) {
            try {
                AddToCart::updateorcreate([
                    'customer_id' => $customer->id,
                    'service_category' => $cart_item['service_type'],
                    'service_code' => $cart_item['service_code'],
                    'service_name' => $cart_item['service_name'],
                    'price_per_unit' => $cart_item['original_price'],
                    'service_price' => $cart_item['original_price'],
                ]);
                $this->dispatch('increase_counter');
                session()->flash('cart_success_msg', 'Service Added to cart...');
            } catch (\Throwable $th) {
                session()->flash('cart_failure_msg', "Something went wrong in adding service to cart.");
            }
        } else {
            $this->dispatch('open_login_model');
        }
    }
    #[On('increase_counter')]
    public function increase_counter()
    {
        $this->cart_counter++;
    }
    #[On('decrease_counter')]
    public function decrease_counter()
    {
        $this->cart_counter--;
    }

    #[On('open_login_model')]
    public function open_login_model()
    {
        $this->resetValidation();
        $this->is_open_login = true;
    }
    public function close_login_model()
    {
        $this->is_open_login = false;
        $this->reset();
        $this->resetValidation();
    }

    public function otp_generate()
    {
        $this->validate([
            "mobile_number" => "required|string|digits:10|regex:/^[6-9]\d{9}$/"
        ], [
            'mobile_number.required' => 'Please enter Mobile Number.',
        ]);
        $this->otp_sent = mt_rand(100000, 999999);
    }
    public function verify_otp()
    {
        $this->validate([
            'otp_receive' => 'required',
        ], [
            'otp_receive.required' => 'Please enter OTP',
        ]);
        if ($this->otp_sent == $this->otp_receive) {
            try {
                $chkuser = Customer::where("phone", $this->mobile_number)->first();
                if ($chkuser) {
                    Auth::guard('customer')->login($chkuser);
                } else {
                    $newUser =  Customer::create([
                        "first_name" => "",
                        "phone" => $this->mobile_number,
                    ]);
                    Auth::guard('customer')->login($newUser);
                }
                session()->flash('login_success_msg', 'Logged in successfully...');
                $this->close_login_model();
            } catch (\Throwable $th) {
                session()->flash('login_failure_msg', "Something went wrong in login.");
            }
        } else {
            $this->addError('otp_receive', 'Invalid OTP, try again...');
        }
    }
    /* public function updateQuantity($index, $newQuantity)
    {
        $cart_item = $this->cart_items[$index];
        $cart_item->quantity = $newQuantity;
        $cart_item->save();
    } */
    public function increase_quantity($index, $qty)
    {
        $cart_item = $this->cart_items[$index];
        $cart_item->quantity = $qty + 1;
        $cart_item->service_price = ($cart_item->price_per_unit * $cart_item->quantity);
        $cart_item->save();
    }
    public function decrease_quantity($index, $qty)
    {
        $cart_item = $this->cart_items[$index];
        $cart_item->quantity = ($qty > 1) ? ($qty - 1) : 1;
        $cart_item->service_price = ($cart_item->price_per_unit * $cart_item->quantity);
        $cart_item->save();
    }

    public function remove_from_cart($s_code)
    {
        $r_item = AddToCart::where('customer_id', 1)->where('service_code', $s_code)->first();
        $r_item->delete();
        $this->dispatch('decrease_counter');
    }
    public function save_booking_service()
    {
        $current_date_time = now()->format('dmy_His');
        $booking_services = $this->cart_items;
        $city = $this->service_city;
        $city_parts = explode('-', $city);
        $order_id = $city_parts[1] . "_" . $current_date_time;
        $address = $this->service_street . " , " . $this->service_area . "," . $city_parts[0];
        try {
            foreach ($booking_services as $b_service) {
                VpmServiceBooking::create([
                    'customer_id' => $b_service['customer_id'],
                    'order_id' => $order_id,
                    'service_category' => $b_service['service_category'],
                    'service_code' => $b_service['service_code'],
                    'service_name' => $b_service['service_name'],
                    'service_street' => $this->service_street,
                    'service_area' => $this->service_area,
                    'service_city' => $city_parts[0],
                    'service_district' => "villupuram",
                    'service_pincode' => $city_parts[2],
                    'service_address' => $address,
                    'price_per_unit' => $b_service['price_per_unit'],
                    'quantity' => $b_service['quantity'],
                    'total_amount' => $b_service['service_price'],
                ]);
                $delete_cart_item = AddToCart::findOrFail($b_service->id);
                $delete_cart_item->delete();
            }
            $this->cart_counter = 0;
            session()->flash('booking_success_msg', "Your services are booked successfully.");
        } catch (\Throwable $th) {
            session()->flash('booking_failure_msg', "Something went wrong in booking services.");
        }
    }
    public function customer_logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('home_page');
    }
    public function render()
    {
        $this->cart_items = AddToCart::where('customer_id', 1)->get();
        return view('livewire.header-nav-user', ['cart_items' => $this->cart_items, 'cart_counter' => $this->cart_counter]);
    }
}
