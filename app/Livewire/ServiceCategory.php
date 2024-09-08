<?php

namespace App\Livewire;

use App\Livewire\Forms\ServiceLabelForm;
use App\Models\ServiceCategoryModel;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use PhpParser\Node\Stmt\TryCatch;

class ServiceCategory extends Master
{
    use WithPagination, WithoutUrlPagination;
    public $id_category;
    #[validate('required')]
    public $category_name = '';

    #[validate('required')]
    public $category_description = '';
    public function __construct()
    {
        $this->id_category = '';
    }
    public function save()
    {
        $this->validate();
        $msg = '';
        try {
            if (!empty($this->id_category)) {
                $service = ServiceCategoryModel::findorfail($this->id_category);
                $service->update($this->all());
                $msg = "Service Category Updated Successfully...";
            } else {
                ServiceCategoryModel::create($this->all());
                $msg = "Service Category Created Successfully...";
            }
            $this->reset();
            $this->close_modal();
            session()->flash('message', $msg);
        } catch (\Throwable $th) {
            session()->flash('d_msg', "Something went wrong in creating/updating the Service Category.");
        }
    }
    public function edit(ServiceCategoryModel $s_label)
    {
        $this->id_category = $s_label->id;
        $this->category_name = $s_label->category_name;
        $this->category_description = $s_label->category_description;
        $this->open_modal();
    }
    public function delete($l_id)
    {
        $d_label = ServiceCategoryModel::findorfail($l_id);
        $d_label->delete();
        session()->flash('d_msg', "Service Category deleted successfully...");
    }
    public function toggle_status($l_id)
    {
        session()->flash('message', '');
        $label = ServiceCategoryModel::findorfail($l_id);
        $label->category_status = ($label->category_status == 1) ? 0 : 1;
        $label->save();
        session()->flash('message', "Service Category Status Changed...");
    }
    public function render()
    {
        if (!empty($this->search)) {
            $service_categories = ServiceCategoryModel::where('service_name', 'like', '%' . $this->search . '%')->orWhere('service_description', 'like', '%' . $this->search . '%')->paginate($this->per_page);
        } else {
            $service_categories = ServiceCategoryModel::paginate($this->per_page);
        }

        return view('livewire.service-category', ['service_categories' => $service_categories]);
    }
}
