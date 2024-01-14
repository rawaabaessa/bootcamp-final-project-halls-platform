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
        Schema::create('durations', function (Blueprint $table) {
            $table->id();
            $table->time('from');
            $table->time('to');
            $table->unsignedBigInteger('facility_id');
            $table->foreign('facility_id')->references('id')->on('facilities')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('durations');
    }
};
