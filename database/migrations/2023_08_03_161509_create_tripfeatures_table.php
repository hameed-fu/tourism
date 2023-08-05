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
        Schema::create('tripfeatures', function (Blueprint $table) {
            $table->id();
            $table->integer('day')->nullable();
            $table->string('itenary')->nullable();
            $table->string('nightstay')->nullable();
            $table->string('spot')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tripfeatures');
    }
};
