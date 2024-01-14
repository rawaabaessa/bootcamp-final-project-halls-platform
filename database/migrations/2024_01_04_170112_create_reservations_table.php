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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('offer_hall_id');
            $table->foreign('offer_hall_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('hall_id');
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
            $table->float('hall_price');
            $table->unsignedBigInteger('occasion_id');
            $table->foreign('occasion_id')->references('id')->on('occasions')->onDelete('cascade');
            $table->date('date');
            $table->integer('poeple_count');
            $table->unsignedBigInteger('voucher_id')->nullable();
            $table->unsignedBigInteger('state_id');
            // $table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
