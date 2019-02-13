<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creer la table voyages avec son contenu
        Schema::create('voyages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->string('pays');
            $table->string('duree');
            $table->string('cout');
            $table->string('photo');
            $table->string('description');
            $table->boolean('disponibilite');
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
        Schema::dropIfExists('voyages');
    }
}
