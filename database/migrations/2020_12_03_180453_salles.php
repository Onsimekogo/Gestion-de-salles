<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Salles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->increments('idSalle');
            $table->string('nomGroupe', 225)->nullable();
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
        Schema::create('salles', function (Blueprint $table){
            $table->dropForeign('salles_idGroupe_foreign');
        });

        Schema::dropIfExists('salles');
    }
}
