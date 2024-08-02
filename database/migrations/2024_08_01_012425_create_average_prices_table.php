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
        Schema::create('average_prices', function (Blueprint $table) {
            $table->id();
            $table->string('location')->nullable();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->integer('annee_modele_min')->nullable();
            $table->integer('annee_modele_max')->nullable();
            $table->string('carburant')->nullable();
            $table->string('boite_vitesse')->nullable();
            $table->integer('kilometrage_min')->nullable();
            $table->integer('kilometrage_max')->nullable();
            $table->integer('average_price')->nullable();
            $table->integer('min_price')->nullable();
            $table->integer('max_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('average_prices');
    }
};
