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
        Schema::create('annonce_attributes_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_id');
            $table->unsignedBigInteger('attribute_id');
            $table->unsignedBigInteger('attributeOption_id')->nullable();
            $table->string('attributeValue')->nullable();
            $table->timestamps();

            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');
            $table->foreign('attribute_id')->references('id')->on('attributes')->onDelete('cascade');
            $table->foreign('attributeOption_id')->references('id')->on('attributes_options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonce_attributes_values');
    }
};
