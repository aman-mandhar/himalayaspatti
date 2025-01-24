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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('pickup_id');
            $table->unsignedBigInteger('destination_id');
            $table->unsignedBigInteger('activity_id');
            $table->unsignedBigInteger('trip_type_id');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('pickup_id')->references('id')->on('pickup_points');
            $table->foreign('destination_id')->references('id')->on('destinations');
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->foreign('trip_type_id')->references('id')->on('trip_types');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
