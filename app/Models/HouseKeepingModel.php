<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseKeepingModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_code',
        'service_type',
        'service_name',
        'service_description',
        'service_image',
        'marked_price',
        'original_price',
        'offer_percentage',
        'offer_price',
        'rating',
        'service_status',
        'show_order',
        'favorite',
        'area',
        'additional_info',
        'service_duration',
        'available_days',
        'cancellation_policy',
        'preparation_instructions',
        'service_tags',
    ];
}
