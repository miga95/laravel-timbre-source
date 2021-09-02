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
        Schema::create('ventes', function (Blueprint $table) {
            $table->smallInteger('novente');
            $table->text('surcategorie');
            $table->text('categorie');
            $table->string('qualite');
            $table->integer('nolot');
            $table->text('description');
            $table->string('photo');
            $table->integer('nb');
            $table->integer('cote');
            $table->integer('depart');
            $table->integer('atteint');
            $table->integer('top');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vente');
    }
}
