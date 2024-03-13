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
        Schema::create('ExpediteurFormulaire', function (Blueprint $table) {
            $table->primary(['idEtd', 'idEvenement']);
            $table->unsignedBigInteger('idEtd');
            $table->unsignedBigInteger('idEvenement');
            $table->foreign('idEvenement')->references('idEvenement')->on('Evenement');
            $table->foreign('idEtd')->references('idEtd')->on('etudiants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ExpediteurFormulaire');
    }
};
