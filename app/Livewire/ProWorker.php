<?php

namespace App\Livewire;

use App\Models\ProWorkerModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ProWorker extends Master
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $profession_code, $service_category, $profession_name, $profession_description, $profession_image,
        $min_charge, $original_charge, $offer_percentage, $offer_price,
        $rating, $show_order, $area, $additional_info, $profession_duration, $id_profession;

    public function __construct()
    {
        $this->id_profession = '';
        $this->rating = 5;
        $this->offer_percentage = 0;
        $this->show_order = 1;
        $this->service_category = "ProWorker";
    }
    public function edit(ProWorkerModel $profession)
    {
        $this->id_profession = $profession->id;
        $this->profession_code = $profession->profession_code;
        $this->profession_name = $profession->profession_name;
        $this->profession_description = $profession->profession_description;
        $this->min_charge = $profession->min_charge;
        $this->offer_percentage = $profession->offer_percentage;
        $this->offer_price = $profession->offer_price;
        $this->original_charge = $profession->original_charge;
        $this->show_order = $profession->show_order;
        $this->area = $profession->area;
        $this->profession_duration = $profession->profession_duration;
        $this->profession_image =  $profession->profession_image;
        $this->open_modal();
    }
    public function save()
    {
        $this->validate([
            'profession_code' => 'required',
            'profession_name' => 'required',
            'min_charge' => 'required',
        ]);
        $msg = '';
        $img_name = '';
        $img_path = '';
        try {
            if (!empty($this->id_profession)) {
                $profession = ProWorkerModel::findorfail($this->id_profession);
                if (!is_string($this->profession_image)) {
                    $img_name = $this->profession_image->getClientOriginalName();
                    $img_path = $this->profession_image->storeAs('', $img_name, 'public_upload');
                    $this->profession_image = $img_path;
                }
                $profession->update($this->all());
                $msg = "Profession Updated Successfully...";
            } else {
                $img_name = $this->profession_image->getClientOriginalName();
                $img_path = $this->profession_image->storeAs('', $img_name, 'public_upload');
                $this->profession_image = $img_path;
                ProWorkerModel::create($this->all());
                $msg = "Profession Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the profession.");
            // dd($th);
        }
    }
    public function updatedMinCharge()
    {
        if ($this->min_charge) {
            $this->offer_price = round($this->min_charge * ($this->offer_percentage / 100));
            $this->original_charge = $this->min_charge - $this->offer_price;
        }
    }
    public function updatedOfferPercentage()
    {
        if ($this->offer_percentage) {
            $this->offer_price = round($this->min_charge * ($this->offer_percentage / 100));
            $this->original_charge = $this->min_charge - $this->offer_price;
        }
    }
    public function delete($p_id)
    {
        $d_profession = ProWorkerModel::findorfail($p_id);
        $d_profession->delete();
        session()->flash('d_msg', "Profession deleted successfully...");
    }
    public function toggle_status($p_id)
    {
        session()->flash('message', '');
        $profession = ProWorkerModel::findorfail($p_id);
        $profession->profession_status = ($profession->profession_status == 1) ? 0 : 1;
        $profession->save();
        session()->flash('message', "Profession Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $professions = ProWorkerModel::where('profession_name', 'like', '%' . $this->search . '%')->orWhere('profession_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $professions = ProWorkerModel::paginate($this->per_page);
        }
        return view('livewire.pro-worker', ['professions' => $professions]);
    }
}
