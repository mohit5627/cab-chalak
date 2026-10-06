<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cabs', function (Blueprint $table) {
            $table->id();

            // Basic Information
            $table->string('name');
            $table->string('type')->default('Sedan');
            $table->string('image')->nullable();
            $table->text('description')->nullable();

            // Cab Features
            $table->unsignedTinyInteger('seats')->default(4);
            $table->unsignedTinyInteger('luggage')->default(2);
            $table->boolean('ac')->default(true);
            $table->string('fuel_type')->default('CNG');

            // Pricing
            $table->decimal('base_fare', 10, 2)->default(0);
            $table->decimal('per_km_rate', 10, 2)->default(0);
            $table->decimal('minimum_km', 10, 2)->default(0);
            $table->decimal('extra_km_rate', 10, 2)->default(0);

            // Booking Type Pricing
            $table->decimal('one_way_fare', 10, 2)->default(0);
            $table->decimal('round_trip_fare', 10, 2)->default(0);
            $table->decimal('airport_transfer_fare', 10, 2)->default(0);
            $table->decimal('hourly_rate', 10, 2)->default(0);

            // Additional Charges
            $table->decimal('driver_allowance', 10, 2)->default(0);
            $table->decimal('toll_charges', 10, 2)->default(0);
            $table->decimal('parking_charges', 10, 2)->default(0);

            // Booking Settings
            $table->decimal('part_payment_percent', 5, 2)->default(25);
            $table->text('cancellation_policy')->nullable();

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cabs');
    }
};