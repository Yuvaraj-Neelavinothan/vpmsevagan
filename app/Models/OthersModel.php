<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OthersModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'others_code',
        'service_category',
        'others_name',
        'others_description',
        'others_image',
        'marked_price',
        'original_price',
        'offer_percentage',
        'offer_price',
        'rating',
        'others_status',
        'show_order',
        'favorite',
        'area',
        'additional_info',
        'others_duration',
        'available_days',
        'cancellation_policy',
        'preparation_instructions',
        'service_tags',
    ];
}
