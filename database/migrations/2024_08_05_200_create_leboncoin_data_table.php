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
        Schema::create('leboncoin_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('list_id')->unique();
            $table->string('subject')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->bigInteger('price')->nullable();
            $table->string('u_car_brand')->nullable();
            $table->string('u_car_model')->nullable();
            $table->string('model-slug')->nullable();
            $table->string('regdate')->nullable();
            $table->string('vehicle_type')->nullable();
            $table->string('fuel')->nullable();
            $table->string('gearbox')->nullable();
            $table->string('mileage')->nullable();
            $table->string('horse_power_din')->nullable();
            $table->string('vehicle_damage')->nullable();
            $table->string('horsepower')->nullable();
            $table->string('doors')->nullable();
            $table->string('seats')->nullable();
            $table->string('vehicule_color')->nullable();
            $table->string('vehicle_vsp')->nullable();
            $table->string('ownerType')->nullable();
            $table->string('url')->nullable();
            $table->string('ownerName')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leboncoin_data');
    }
};
