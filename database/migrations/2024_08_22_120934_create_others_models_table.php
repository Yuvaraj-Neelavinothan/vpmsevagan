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
        Schema::create('others_models', function (Blueprint $table) {
            $table->id();
            $table->string('others_code')->unique();
            $table->string('service_category')->nullable();
            $table->string('others_name');
            $table->text('others_description')->nullable();
            $table->string('others_image')->nullable();
            $table->decimal('marked_price', 8, 2)->nullable();
            $table->decimal('original_price', 8, 2);
            $table->decimal('offer_percentage', 5, 2)->default(0);
            $table->decimal('offer_price', 8, 2)->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->boolean('others_status')->default(true);
            $table->integer('show_order')->default(0);
            $table->boolean('favorite')->default(false);
            $table->string('area')->nullable();
            $table->string('additional_info')->nullable();
            $table->integer('others_duration')->nullable();
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
        Schema::dropIfExists('others_models');
    }
};
