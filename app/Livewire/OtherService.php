<?php

namespace App\Livewire;

use App\Models\OthersModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class OtherService extends Master
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $others_code, $service_category, $others_name, $others_description, $others_image,
        $marked_price, $original_price, $offer_percentage, $offer_price,
        $rating, $show_order, $area, $others_duration, $id_others;

    public function __construct()
    {
        $this->id_others = '';
        $this->rating = 5;
        $this->offer_percentage = 0;
        $this->show_order = 1;
        $this->service_category = "Other Services";
    }
    public function edit(OthersModel $others)
    {
        $this->id_others = $others->id;
        $this->others_code = $others->others_code;
        $this->others_name = $others->others_name;
        $this->others_description = $others->others_description;
        $this->marked_price = $others->marked_price;
        $this->offer_percentage = $others->offer_percentage;
        $this->offer_price = $others->offer_price;
        $this->original_price = $others->original_price;
        $this->show_order = $others->show_order;
        $this->area = $others->area;
        $this->others_duration = $others->others_duration;
        $this->others_image =  $others->others_image;
        $this->open_modal();
    }
    public function save()
    {
        $this->validate([
            'others_code' => 'required',
            'others_name' => 'required',
            'marked_price' => 'required',
        ]);
        $msg = '';
        $img_name = '';
        $img_path = '';
        try {
            if (!empty($this->id_others)) {
                $others = OthersModel::findorfail($this->id_others);
                if (!is_string($this->others_image)) {
                    $img_name = $this->others_image->getClientOriginalName();
                    $img_path = $this->others_image->storeAs('', $img_name, 'public_upload');
                    $this->others_image = $img_path;
                }
                $others->update($this->all());
                $msg = "Other service Updated Successfully...";
            } else {
                $img_name = $this->others_image->getClientOriginalName();
                $img_path = $this->others_image->storeAs('', $img_name, 'public_upload');
                $this->others_image = $img_path;
                OthersModel::create($this->all());
                $msg = "Other Service Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the other service.");
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
    public function delete($o_id)
    {
        $d_others = OthersModel::findorfail($o_id);
        $d_others->delete();
        session()->flash('d_msg', "Other Service deleted successfully...");
    }
    public function toggle_status($o_id)
    {
        session()->flash('message', '');
        $others = OthersModel::findorfail($o_id);
        $others->others_status = ($others->others_status == 1) ? 0 : 1;
        $others->save();
        session()->flash('message', "Other service Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $other_services = OthersModel::where('others_name', 'like', '%' . $this->search . '%')->orWhere('others_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $other_services = OthersModel::paginate($this->per_page);
        }
        return view('livewire.other-service', ['other_services' => $other_services]);
    }
}
