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
        Schema::create('qaah_halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('discription');
            $table->integer('people_count');
            $table->integer('price');
            $table->string('currency');
            $table->float('area');
            $table->unsignedBigInteger('facility_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qaah_halls');
    }
};
