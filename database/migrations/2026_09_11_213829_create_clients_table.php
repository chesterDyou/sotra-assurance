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

            $table->string('type')->default('particulier');

            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('raison_sociale')->nullable();

            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('telephone_secondaire')->nullable();

            $table->text('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();

            $table->string('numero_identification')->nullable();
            $table->date('date_naissance')->nullable();

            $table->string('statut')->default('actif');

            $table->text('notes')->nullable();

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
