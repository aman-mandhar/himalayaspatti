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
        Schema::create('image_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id')->nullable(); // Foreign key to trips table
            $table->unsignedBigInteger('destination_id')->nullable(); // Foreign key to destinations table
            $table->unsignedBigInteger('activity_id')->nullable(); // Foreign key to activities table
            $table->unsignedBigInteger('trip_type_id')->nullable(); // Foreign key to trip_types table
            $table->unsignedBigInteger('pickup_id')->nullable(); // Foreign key to pickup_points table
            $table->string('image_path');         // Path to the image
            $table->string('caption')->nullable(); // Optional caption for the image
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->foreign('trip_type_id')->references('id')->on('trip_types')->onDelete('cascade');
            $table->foreign('pickup_id')->references('id')->on('pickup_points')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_galleries');
    }
};
