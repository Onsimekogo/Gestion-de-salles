<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmploiDuTemps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emploi_du_temps', function (Blueprint $table) {
            $table->increments('idEmploi');
            $table->string('jours',255);
            $table->time('heureMatin');
            $table->time('heureSoir');

            $table->integer('idGroupe')->unsigned();
            $table->foreign('idGroupe')
                  ->references('idGroupe')
                  ->on('groupe')
                  ->onDelete('restrict')
                  ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('emploi_du_temps', function (Blueprint $table){
            $table->dropForeign('emploi_du_temps_idGroupe_foreign');
        });

        Schema::dropIfExists('emploi_du_temps');
    }
}
