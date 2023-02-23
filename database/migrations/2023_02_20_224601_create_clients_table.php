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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->char("sex");
            $table->date("dateNaissance");
            $table->string("lieuNaissance");
            $table->string("nationalite");
            $table->string("ville");
            $table->string("pays");
            $table->string("adresse");
            $table->string("phone1");
            $table->string("phone2")->nullable();
            $table->string('pieceIdentite');
            $table->string('noPieceIdentite');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
