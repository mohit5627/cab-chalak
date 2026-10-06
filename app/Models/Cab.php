<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cab extends Model
{
    protected $fillable = [
        'name',
        'type',
        'image',
        'description',
        'seats',
        'luggage',
        'ac',
        'fuel_type',
        'base_fare',
        'per_km_rate',
        'minimum_km',
        'extra_km_rate',
        'one_way_fare',
        'round_trip_fare',
        'airport_transfer_fare',
        'hourly_rate',
        'driver_allowance',
        'toll_charges',
        'parking_charges',
        'part_payment_percent',
        'cancellation_policy',
        'is_active',
    ];

    protected $casts = [
        'ac' => 'boolean',
        'is_active' => 'boolean',

        'base_fare' => 'decimal:2',
        'per_km_rate' => 'decimal:2',
        'minimum_km' => 'decimal:2',
        'extra_km_rate' => 'decimal:2',

        'one_way_fare' => 'decimal:2',
        'round_trip_fare' => 'decimal:2',
        'airport_transfer_fare' => 'decimal:2',
        'hourly_rate' => 'decimal:2',

        'driver_allowance' => 'decimal:2',
        'toll_charges' => 'decimal:2',
        'parking_charges' => 'decimal:2',

        'part_payment_percent' => 'decimal:2',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}