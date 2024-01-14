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
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('title')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('logo')->nullable();
            $table->string('license');
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('directorate_id');
            $table->bigInteger('phone');
            $table->bigInteger('identity_NO');
            $table->string('currency')->nullable();
            $table->enum('state',['step1','approved','complete','reject']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
