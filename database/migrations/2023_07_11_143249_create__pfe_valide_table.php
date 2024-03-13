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
        Schema::create('PfeValide', function (Blueprint $table) {
            $table->primary(['idSujetPFE', 'idEtd']);
            $table->unsignedBigInteger('idSujetPFE');
            $table->unsignedBigInteger('idEtd');
            $table->string('sujetValide');
            $table->foreign('idSujetPFE')->references('idSujetPFE')->on('SujetPFE');
            $table->foreign('idEtd')->references('idEtd')->on('etudiants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PfeValide');
    }
};
