<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantModel extends Model
{
    use HasFactory;
    protected $fillable = ['applicant_name', 'phone_number', 'resume', 'additional_info'];
}
