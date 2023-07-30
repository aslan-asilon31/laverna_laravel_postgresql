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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_category_id')->nullable();
            $table->integer('amenity_id')->nullable();
            $table->integer('bed_type_id')->nullable();
            $table->integer('cancellation_id')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->date('room_availability')->nullable();
            $table->integer('children_amount')->nullable();
            $table->integer('adult_amount')->nullable();
            $table->integer('price_base')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('price_after')->nullable();
            $table->boolean('is_cancel')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
