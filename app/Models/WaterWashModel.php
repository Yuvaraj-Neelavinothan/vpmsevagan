<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterWashModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'wash_code',
        'service_category',
        'wash_name',
        'wash_description',
        'wash_image',
        'marked_price',
        'original_price',
        'offer_percentage',
        'offer_price',
        'rating',
        'wash_status',
        'show_order',
        'favorite',
        'area',
        'service_provider',
        'additional_info',
        'wash_duration',
        'available_days',
        'cancellation_policy',
        'preparation_instructions',
        'service_tags',
    ];
}
