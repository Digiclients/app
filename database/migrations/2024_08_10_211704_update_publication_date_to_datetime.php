<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('annonces', function (Blueprint $table) {
            $table->dateTime('publication_date')->change();
        });
    }

    public function down()
    {
        Schema::table('annonces', function (Blueprint $table) {
            $table->date('publication_date')->change(); // Revert to the original `date` type if needed
        });
    }
};
