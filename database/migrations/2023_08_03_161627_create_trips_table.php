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
            $table->string('trip_img')->nullable();
            $table->string('trip_name')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('price', 7, 2)->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('triptype_id');
            $table->unsignedBigInteger('transportation_id');
            $table->text('trip_description')->nullable();
            $table->timestamps();
            $table->foreign('triptype_id')->references('id')->on('trip_types');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->foreign('transportation_id')->references('id')->on('transports');

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
