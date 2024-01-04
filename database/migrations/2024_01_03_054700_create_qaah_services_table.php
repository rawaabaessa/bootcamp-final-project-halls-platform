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
        Schema::create('qaah_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('hall_id');
            $table->integer('price');
            $table->boolean('is_free');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qaah_services');
    }
};
