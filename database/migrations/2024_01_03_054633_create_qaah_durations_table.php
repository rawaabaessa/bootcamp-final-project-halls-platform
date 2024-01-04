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
        Schema::create('qaah_durations', function (Blueprint $table) {
            $table->id();
            $table->timestamp('from');
            $table->timestamp('to');
            $table->unsignedBigInteger('facility_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qaah_durations');
    }
};
