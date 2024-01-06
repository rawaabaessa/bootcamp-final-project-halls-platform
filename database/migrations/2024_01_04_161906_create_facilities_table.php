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
            $table->string('logo');
            $table->string('license');
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('directorate_id')->unique();
            $table->bigInteger('phone');
            $table->bigInteger('identity_NO');
            $table->string('currency');
            $table->enum('state',['register','step1','step2','approved','complete','reject']);
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
