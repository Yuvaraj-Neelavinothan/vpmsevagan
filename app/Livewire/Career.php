<?php

namespace App\Livewire;

use App\Models\ApplicantModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Career extends Component
{
    use WithFileUploads;
    public $applicant_name, $phone_number, $resume, $additional_info;
    public function save()
    {
        $this->validate([
            'applicant_name' => 'required',
            'phone_number' => 'required|string|digits:10|regex:/^[6-9]\d{9}$/',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $resume_name = $this->resume->getClientOriginalName();
        $resume_path = $this->resume->storeAs('resume', $resume_name, 'public_upload');
        $this->resume = $resume_path;
        try {
            ApplicantModel::create([
                'applicant_name' => $this->applicant_name,
                'phone_number' => $this->phone_number,
                'resume' => $this->resume,
                'additional_info' => $this->additional_info ?? null,
            ]);
            session()->flash('applicant_success_msg', 'Your application sent, Good luck...');
            return redirect()->route('home_page');
        } catch (\Throwable $th) {
            session()->flash('applicant_failure_msg', "Something went wrong in sending application.");
            dd($th);
        }
    }
    public function render()
    {
        return view('livewire.career');
    }
}
