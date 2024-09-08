<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProWorkerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'profession_code',
        'service_category',
        'profession_name',
        'profession_description',
        'profession_image',
        'min_charge',
        'original_charge',
        'offer_percentage',
        'offer_price',
        'rating',
        'profession_status',
        'show_order',
        'favorite',
        'area',
        'additional_info',
        'profession_duration',
        'available_days',
        'cancellation_policy',
        'preparation_instructions',
        'service_tags',
    ];
}
