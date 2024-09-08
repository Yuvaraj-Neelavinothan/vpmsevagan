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
        Schema::create('construction_work_models', function (Blueprint $table) {
            $table->id();
            $table->string('material_code')->unique();
            $table->string('service_category')->nullable();
            $table->string('material_name');
            $table->text('material_description')->nullable();
            $table->string('material_image')->nullable();
            $table->string('material_unit');
            $table->decimal('price_per_unit', 10, 2)->nullable();
            $table->decimal('original_price', 10, 2);
            $table->decimal('offer_percentage', 5, 2)->default(0);
            $table->decimal('offer_price', 10, 2)->nullable();
            $table->decimal('min_transport_charge', 10, 2)->nullable();
            $table->integer('minimum_order_quantity')->default(1);
            $table->decimal('rating', 3, 2)->default(0);
            $table->boolean('material_status')->default(true);
            $table->integer('show_order')->default(0);
            $table->boolean('favorite')->default(false);
            $table->string('availability')->default('in stock');
            $table->string('delivery_options')->nullable();
            $table->string('additional_info')->nullable();
            $table->json('available_days')->nullable();
            $table->text('cancellation_policy')->nullable();
            $table->text('preparation_instructions')->nullable();
            $table->json('service_tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('construction_work_models');
    }
};
