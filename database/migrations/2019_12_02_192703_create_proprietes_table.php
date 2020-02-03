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
            $table->integer('nombre_chambre_min')->nullable();
            $table->integer('nombre_chambre_max')->nullable();
            $table->integer('salle_de_bain')->nullable();
            $table->string('superficie');
            $table->string('description');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('Type_anonce_id');
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
