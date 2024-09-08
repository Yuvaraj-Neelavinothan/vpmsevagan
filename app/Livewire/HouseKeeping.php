<?php

namespace App\Livewire;

use App\Models\HouseKeepingModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class HouseKeeping extends Master
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $service_code, $service_type, $service_name, $service_description, $service_image,
        $marked_price, $original_price, $offer_percentage, $offer_price,
        $rating, $show_order, $area, $additional_info, $service_duration, $id_service;

    public function __construct()
    {
        $this->id_service = '';
        $this->rating = 5;
        $this->offer_percentage = 0;
        $this->show_order = 1;
        $this->service_type = "House Keeping";
    }
    public function edit(HouseKeepingModel $hk_service)
    {
        $this->id_service = $hk_service->id;
        $this->service_code = $hk_service->service_code;
        $this->service_name = $hk_service->service_name;
        $this->service_description = $hk_service->service_description;
        $this->marked_price = $hk_service->marked_price;
        $this->offer_percentage = $hk_service->offer_percentage;
        $this->offer_price = $hk_service->offer_price;
        $this->original_price = $hk_service->original_price;
        $this->show_order = $hk_service->show_order;
        $this->area = $hk_service->area;
        $this->service_duration = $hk_service->service_duration;
        $this->service_image =  $hk_service->service_image;
        $this->open_modal();
    }
    public function save()
    {
        $this->validate([
            'service_code' => 'required',
            'service_name' => 'required',
            'marked_price' => 'required',
        ]);
        $msg = '';
        $img_name = '';
        $img_path = '';
        try {
            if (!empty($this->id_service)) {
                $service = HouseKeepingModel::findorfail($this->id_service);
                if (!is_string($this->service_image)) {
                    $img_name = $this->service_image->getClientOriginalName();
                    $img_path = $this->service_image->storeAs('', $img_name, 'public_upload');
                    $this->service_image = $img_path;
                }
                $service->update($this->all());
                $msg = "Service Updated Successfully...";
            } else {
                $img_name = $this->service_image->getClientOriginalName();
                $img_path = $this->service_image->storeAs('', $img_name, 'public_upload');
                $this->service_image = $img_path;
                HouseKeepingModel::create($this->all());
                $msg = "Service Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the Service.");
            dd($th);
        }
    }
    public function updatedMarkedPrice()
    {
        if ($this->marked_price) {
            $this->offer_price = round($this->marked_price * ($this->offer_percentage / 100));
            $this->original_price = $this->marked_price - $this->offer_price;
        }
    }
    public function updatedOfferPercentage()
    {
        if ($this->offer_percentage) {
            $this->offer_price = round($this->marked_price * ($this->offer_percentage / 100));
            $this->original_price = $this->marked_price - $this->offer_price;
        }
    }
    public function delete($s_id)
    {
        $d_service = HouseKeepingModel::findorfail($s_id);
        $d_service->delete();
        session()->flash('d_msg', "Service deleted successfully...");
    }
    public function toggle_status($s_id)
    {
        session()->flash('message', '');
        $service = HouseKeepingModel::findorfail($s_id);
        $service->service_status = ($service->service_status == 1) ? 0 : 1;
        $service->save();
        session()->flash('message', "Service Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $house_keeping_services = HouseKeepingModel::where('service_name', 'like', '%' . $this->search . '%')->orWhere('service_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $house_keeping_services = HouseKeepingModel::paginate($this->per_page);
        }
        return view('livewire.house-keeping', ['hk_services' => $house_keeping_services]);
    }
}
