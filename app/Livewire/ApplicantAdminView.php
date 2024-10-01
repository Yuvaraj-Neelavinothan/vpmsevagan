<?php

namespace App\Livewire;

use App\Models\ApplicantModel;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class ApplicantAdminView extends Master
{
    use WithPagination, WithoutUrlPagination;
    public function render()
    {
        $applicant = ApplicantModel::latest()->paginate();
        return view('livewire.applicant-admin-view', ['applicant' => $applicant]);
    }
}
