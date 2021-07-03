<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    { 
        Schema::create('etudiants', function (Blueprint $table) {
            $table->integer('cin')->primary();
            $table->string('prenomNom');
            $table->date('dteNaissance');
            $table->string('genre');
            $table->string('pays');
            $table->string('email');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}