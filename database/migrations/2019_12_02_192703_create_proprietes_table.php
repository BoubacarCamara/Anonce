<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('localisation');
            $table->string('image');
            $table->integer('prix_min');
            $table->integer('prix_max');
            $table->integer('nombre_chambre_min');
            $table->integer('nombre_chambre_max');
            $table->integer('salle_de_bain');
            $table->string('superficie');
            $table->string('type_anonce');
            $table->string('description');
            $table->unsignedInteger('Type_de_proprietes_id');
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
        Schema::dropIfExists('proprietes');
    }
}
