<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionWorkModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'material_code',
        'service_category',
        'material_name',
        'material_description',
        'material_image',
        'material_unit',
        'price_per_unit',
        'original_price',
        'offer_percentage',
        'offer_price',
        'min_transport_charge',
        'minimum_order_quantity',
        'rating',
        'material_status',
        'show_order',
        'favorite',
        'availability',
        'delivery_options',
        'additional_info',
        'available_days',
        'cancellation_policy',
        'preparation_instructions',
        'service_tags',
    ];
}
