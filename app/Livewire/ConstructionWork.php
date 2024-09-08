<?php

namespace App\Livewire;

use App\Models\ConstructionWorkModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class ConstructionWork extends Master
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    public $material_code, $service_category, $material_name, $material_description, $material_image,
        $material_unit, $price_per_unit, $original_price, $offer_percentage, $offer_price,
        $min_transport_charge, $minimum_order_quantity, $rating, $show_order, $additional_info, $id_material;

    public function __construct()
    {
        $this->id_material = '';
        $this->rating = 5;
        $this->offer_percentage = 0;
        $this->show_order = 1;
        $this->service_category = "Construction Work";
        $this->material_unit = "unit";
        $this->minimum_order_quantity = 0;
    }
    public function edit(ConstructionWorkModel $material)
    {
        $this->id_material = $material->id;
        $this->material_code = $material->material_code;
        $this->material_name = $material->material_name;
        $this->material_description = $material->material_description;
        $this->price_per_unit = $material->price_per_unit;
        $this->offer_percentage = $material->offer_percentage;
        $this->offer_price = $material->offer_price;
        $this->original_price = $material->original_price;
        $this->min_transport_charge = $material->min_transport_charge;
        $this->minimum_order_quantity = $material->minimum_order_quantity;
        $this->show_order = $material->show_order;
        $this->material_image =  $material->material_image;
        $this->open_modal();
    }
    public function save()
    {
        $this->validate([
            'material_code' => 'required',
            'material_name' => 'required',
            'price_per_unit' => 'required',
        ]);
        $msg = '';
        $img_name = '';
        $img_path = '';
        try {
            if (!empty($this->id_material)) {
                $material = ConstructionWorkModel::findorfail($this->id_material);
                if (!is_string($this->material_image)) {
                    $img_name = $this->material_image->getClientOriginalName();
                    $img_path = $this->material_image->storeAs('', $img_name, 'public_upload');
                    $this->material_image = $img_path;
                }
                $material->update($this->all());
                $msg = "Material Updated Successfully...";
            } else {
                $img_name = $this->material_image->getClientOriginalName();
                $img_path = $this->material_image->storeAs('', $img_name, 'public_upload');
                $this->material_image = $img_path;
                ConstructionWorkModel::create($this->all());
                $msg = "Material Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the material.");
            dd($th);
        }
    }
    public function updatedPricePerUnit()
    {
        if ($this->price_per_unit) {
            $this->offer_price = round($this->price_per_unit * ($this->offer_percentage / 100));
            $this->original_price = $this->price_per_unit - $this->offer_price;
        }
    }
    public function updatedOfferPercentage()
    {
        if ($this->offer_percentage) {
            $this->offer_price = round($this->price_per_unit * ($this->offer_percentage / 100));
            $this->original_price = $this->price_per_unit - $this->offer_price;
        }
    }
    public function delete($m_id)
    {
        $d_material = ConstructionWorkModel::findorfail($m_id);
        $d_material->delete();
        session()->flash('d_msg', "Material deleted successfully...");
    }
    public function toggle_status($m_id)
    {
        session()->flash('message', '');
        $material = ConstructionWorkModel::findorfail($m_id);
        $material->material_status = ($material->material_status == 1) ? 0 : 1;
        $material->save();
        session()->flash('message', "Material Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $materials = ConstructionWorkModel::where('material_name', 'like', '%' . $this->search . '%')->orWhere('material_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $materials = ConstructionWorkModel::paginate($this->per_page);
        }
        return view('livewire.construction-work', ['materials' => $materials]);
    }
}
