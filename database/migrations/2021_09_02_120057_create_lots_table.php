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
            $table->string('titre');
            $table->integer('nolot')->nullable();
            $table->text('description')->nullable();
            $table->string('qualite')->nullable();
            $table->string('photo')->nullable();
            $table->integer('nb')->nullable();
            $table->integer('cote')->nullable();
            $table->integer('depart')->nullable();
            $table->integer('atteint')->nullable();
            $table->integer('top')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('vente_id')->nullable();
            $table->unsignedBigInteger('surcategorie_id')->nullable();
            $table->unsignedBigInteger('categorie_id')->nullable();
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
