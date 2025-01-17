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
        Schema::create('price_variations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('price_category_id');
            $table->unsignedBigInteger('trip_id');
            $table->integer('price');
            $table->timestamps();

            $table->foreign('price_category_id')->references('id')->on('price_categories')->onDelete('cascade');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_variations');
    }
};
