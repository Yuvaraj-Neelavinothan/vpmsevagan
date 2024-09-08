<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'service_category', 'service_code', 'service_name', 'price_per_unit', 'quantity', 'service_price'];
}
