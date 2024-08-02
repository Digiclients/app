<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('localizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('zip_code_id');
            $table->string('localization');
            $table->timestamps();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('zip_code_id')->references('id')->on('zip_codes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localizations');
    }
};
