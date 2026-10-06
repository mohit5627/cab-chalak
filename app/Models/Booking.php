<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = [
        'booking_reference',
        'cab_id',

        'pickup_location',
        'drop_location',
        'pickup_place_id',
        'drop_place_id',
        'travel_date',
        'return_date',
        'distance_km',
        'duration',

        'passenger_name',
        'passenger_mobile',
        'passenger_email',
        'passenger_count',

        'trip_type',

        'base_fare',
        'distance_fare',
        'driver_allowance',
        'toll_charges',
        'parking_charges',
        'total_fare',

        'part_payment_percent',
        'part_payment_amount',
        'remaining_amount',

        'payment_status',
        'booking_status',

        'customer_notes',
    ];

    protected $casts = [
        'travel_date' => 'date',
        'return_date' => 'date',
        'distance_km' => 'decimal:2',

        'base_fare' => 'decimal:2',
        'distance_fare' => 'decimal:2',
        'driver_allowance' => 'decimal:2',
        'toll_charges' => 'decimal:2',
        'parking_charges' => 'decimal:2',
        'total_fare' => 'decimal:2',

        'part_payment_percent' => 'decimal:2',
        'part_payment_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
    ];

    public function cab(): BelongsTo
    {
        return $this->belongsTo(Cab::class);
    }
}