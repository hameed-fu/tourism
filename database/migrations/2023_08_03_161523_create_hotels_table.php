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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('no_room')->nullable();
            $table->string('hotel_name')->nullable();
            $table->string('facilities')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->string('hotel_img')->nullable();
            $table->integer('price_range')->nullable();
            $table->unsignedBigInteger('city_id'); // Using unsignedBigInteger for foreign key
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities'); // Foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            // Remove the foreign key constraint
            $table->dropForeign(['location_id']);

            // Drop the foreign key column
            $table->dropColumn('location_id');
        });
    }
};
