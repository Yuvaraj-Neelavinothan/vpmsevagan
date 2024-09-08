<?php

namespace App\Livewire;

use App\Models\WaterWashModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class WaterWash extends Master
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $wash_code, $service_category, $wash_name, $wash_description, $wash_image,
        $marked_price, $original_price, $offer_percentage, $offer_price,
        $rating, $show_order, $area, $additional_info, $wash_duration, $service_provider, $id_wash;

    public function __construct()
    {
        $this->id_wash = '';
        $this->rating = 5;
        $this->offer_percentage = 0;
        $this->show_order = 1;
        $this->service_category = "Water Wash";
        $this->service_provider = '';
    }
    public function edit(WaterWashModel $wash)
    {
        $this->id_wash = $wash->id;
        $this->wash_code = $wash->wash_code;
        $this->wash_name = $wash->wash_name;
        $this->wash_description = $wash->wash_description;
        $this->marked_price = $wash->marked_price;
        $this->offer_percentage = $wash->offer_percentage;
        $this->offer_price = $wash->offer_price;
        $this->original_price = $wash->original_price;
        $this->show_order = $wash->show_order;
        $this->area = $wash->area;
        $this->wash_duration = $wash->wash_duration;
        $this->wash_image =  $wash->wash_image;
        $this->open_modal();
    }
    public function save()
    {
        $this->validate([
            'wash_code' => 'required',
            'wash_name' => 'required',
            'marked_price' => 'required',
        ]);
        $msg = '';
        $img_name = '';
        $img_path = '';
        try {
            if (!empty($this->id_wash)) {
                $wash = WaterWashModel::findorfail($this->id_wash);
                if (!is_string($this->wash_image)) {
                    $img_name = $this->wash_image->getClientOriginalName();
                    $img_path = $this->wash_image->storeAs('', $img_name, 'public_upload');
                    $this->wash_image = $img_path;
                }
                $wash->update($this->all());
                $msg = "Wash Updated Successfully...";
            } else {
                $img_name = $this->wash_image->getClientOriginalName();
                $img_path = $this->wash_image->storeAs('', $img_name, 'public_upload');
                $this->wash_image = $img_path;
                WaterWashModel::create($this->all());
                $msg = "Wash Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the wash.");
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
    public function delete($w_id)
    {
        $d_wash = WaterWashModel::findorfail($w_id);
        $d_wash->delete();
        session()->flash('d_msg', "Wash deleted successfully...");
    }
    public function toggle_status($w_id)
    {
        session()->flash('message', '');
        $wash = WaterWashModel::findorfail($w_id);
        $wash->wash_status = ($wash->wash_status == 1) ? 0 : 1;
        $wash->save();
        session()->flash('message', "Wash Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $washes = WaterWashModel::where('wash_name', 'like', '%' . $this->search . '%')->orWhere('wash_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $washes = WaterWashModel::paginate($this->per_page);
        }
        return view('livewire.water-wash', ['washes' => $washes]);
    }
}
