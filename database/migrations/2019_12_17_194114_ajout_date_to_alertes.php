<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjoutDateToAlertes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alertes', function (Blueprint $table) {
            $table->dateTime('date')->default(date('Y-m-d H:i:s'))->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alertes', function (Blueprint $table) {
            $table->string('date')->nullable()->change();
        });
    }
}
