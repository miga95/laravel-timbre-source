<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('vente_id');
            $table->text('surcategorie_id');
            $table->text('categorie_id');
            $table->integer('nolot');
            $table->text('description');
            $table->string('qualite');
            $table->string('photo');
            $table->integer('nb');
            $table->integer('cote');
            $table->integer('depart');
            $table->integer('atteint');
            $table->integer('top');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
