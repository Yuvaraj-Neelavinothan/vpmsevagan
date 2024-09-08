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
        Schema::create('vpm_service_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->string('order_id');
            $table->string('service_category');
            $table->string('service_code');
            $table->string('service_name');
            $table->dateTime('service_date')->nullable();
            $table->integer('service_duration')->nullable();
            // Service Address Fields
            $table->string('service_street')->nullable();
            $table->string('service_area')->nullable();
            $table->string('service_city')->nullable();
            $table->string('service_district')->nullable();
            $table->string('service_pincode')->nullable();
            $table->text('service_address');

            $table->decimal('price_per_unit', 8, 2);
            $table->integer('quantity')->default(1);
            $table->decimal('total_amount', 8, 2);
            $table->string('booking_status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->string('payment_method')->nullable();
            $table->text('customer_feedback')->nullable();
            $table->text('admin_remarks')->nullable();
            // Foreign key constraints
            $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vpm_service_bookings');
    }
};
