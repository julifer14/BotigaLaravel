<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LiniaComanda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linia_comandas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('comanda_id');
            $table->foreign('comanda_id')->references('id')->on('comandas');

            $table->unsignedBigInteger('producte_id');
            $table->foreign('producte_id')->references('id')->on('productes');

            $table->integer('quantitat');
            $table->float('preu');
            $table->float('descompte');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
