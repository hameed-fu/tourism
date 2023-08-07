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
            $table->integer('room_no')->nullable();
            $table->unsignedBigInteger('roomtype_id');
            $table->integer('occupancy')->nullable();
            $table->string('room_description')->nullable();
            $table->string('availability')->nullable();
            $table->unsignedBigInteger('hotel_id');
            $table->timestamps();
            $table->foreign('roomtype_id')->references('id')->on('room_types');
            $table->foreign('hotel_id')->references('id')->on('hotels');
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
