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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('annonce_id')->nullable();
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->string('alt');
            $table->string('path');
            $table->boolean('feature_img')->default(false);
            $table->timestamps();
            $table->foreign('annonce_id')->references('id')->on('annonces')->onDelete('cascade');
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
