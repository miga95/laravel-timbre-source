<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function(Blueprint $table){
            $table->id();
            $table->integer('numeroVente')->nullable();
            $table->dateTime('cloture')->nullable();
            $table->text('info')->nullable();
            $table->unsignedBigInteger('lot_id')->nullable();

            $table->foreign('lot_id')->references('id')->on('lots')->onDelete('set null');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventes');
    }
}
