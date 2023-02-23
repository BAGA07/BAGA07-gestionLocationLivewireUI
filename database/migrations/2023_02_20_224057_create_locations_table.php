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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->dateTime("dateDebut");
            $table->dateTime("dateFin");
            $table->foreignId("client_id");
            $table->foreignId("user_id")->constrained();
            $table->foreignId("statut_location_id")->constrained();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropForeign("client_id", "user_id", "statut_location_id");
        });
        Schema::dropIfExists('locations');
    }
};
