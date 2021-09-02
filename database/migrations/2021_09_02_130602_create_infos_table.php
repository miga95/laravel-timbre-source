<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->integer('infos_novente');
            $table->date('infos_cloture');
            $table->string('infos_type');
            $table->smallInteger('infos_encours');
            $table->text('infos_description');
            $table->text('infos_pageaccueil');
            $table->smallInteger('infos_cacher');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
