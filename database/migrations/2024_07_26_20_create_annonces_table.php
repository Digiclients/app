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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('boutique_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('localization_id');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->string('email')->unique();
            $table->string('phone');
            $table->dateTime('publication_date');
            $table->string('status');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('boutique_id')->references('id')->on('boutiques')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('localization_id')->references('id')->on('localizations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
