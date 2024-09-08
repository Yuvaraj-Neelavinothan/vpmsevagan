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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();

            // Permanent Address Fields
            $table->text('permanent_address')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_district')->nullable();
            $table->string('permanent_pincode')->nullable();
            $table->string('state')->nullable();

            // Location Coordinates
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            // Device details
            $table->string('imei_number')->nullable();
            $table->string('device_name')->nullable();
            $table->string('browser_name')->nullable();
            
            // Service Address Fields
            $table->text('service_address')->nullable();
            $table->string('service_city')->nullable();
            $table->string('service_district')->nullable();
            $table->string('service_pincode')->nullable();

            // Profile Picture
            $table->string('profile_picture')->nullable();

            // Loyalty Points
            $table->integer('loyalty_points')->default(0);

            // Account Status
            $table->enum('account_status', ['active', 'block'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
