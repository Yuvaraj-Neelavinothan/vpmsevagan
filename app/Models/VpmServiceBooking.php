<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VpmServiceBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'order_id',
        'service_category',
        'service_code',
        'service_name',
        'service_date',
        'service_duration',
        'service_street',
        'service_area',
        'service_city',
        'service_district',
        'service_pincode',
        'service_address',
        'price_per_unit',
        'quantity',
        'total_amount',
        'booking_status',
        'payment_status',
        'payment_method',
        'customer_feedback',
        'admin_remarks',
    ];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
}
