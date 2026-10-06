<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            // Booking Reference
            $table->string('booking_reference')->unique();

            // Selected Cab
            $table->foreignId('cab_id')
                ->constrained('cabs')
                ->restrictOnDelete();

            // Journey Details
            $table->string('pickup_location');
            $table->string('drop_location');

            $table->string('pickup_place_id')->nullable();
            $table->string('drop_place_id')->nullable();

            $table->date('travel_date');

            $table->decimal('distance_km', 10, 2)->nullable();
            $table->string('duration')->nullable();

            // Passenger Details
            $table->string('passenger_name');
            $table->string('passenger_mobile', 20);
            $table->string('passenger_email')->nullable();

            $table->unsignedInteger('passenger_count')->default(1);

            // Trip Type
            $table->enum('trip_type', [
                'one_way',
                'round_trip',
                'airport_transfer',
                'hourly'
            ])->default('one_way');

            // Pricing
            $table->decimal('base_fare', 10, 2)->default(0);
            $table->decimal('distance_fare', 10, 2)->default(0);
            $table->decimal('driver_allowance', 10, 2)->default(0);
            $table->decimal('toll_charges', 10, 2)->default(0);
            $table->decimal('parking_charges', 10, 2)->default(0);

            $table->decimal('total_fare', 10, 2)->default(0);

            $table->decimal('part_payment_percent', 5, 2)->default(0);
            $table->decimal('part_payment_amount', 10, 2)->default(0);
            $table->decimal('remaining_amount', 10, 2)->default(0);

            // Payment
            $table->enum('payment_status', [
                'pending',
                'partial',
                'paid',
                'failed',
                'refunded'
            ])->default('pending');

            // Booking Status
            $table->enum('booking_status', [
                'pending',
                'confirmed',
                'completed',
                'cancelled'
            ])->default('pending');

            // Optional Notes
            $table->text('customer_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
