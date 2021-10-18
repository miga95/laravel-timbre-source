<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationBetweenCategoriesSurcategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories',function(Blueprint $table){
            $table->unsignedBigInteger('surcategorie_id')->nullable();
            $table->foreign('surcategorie_id')->references('id')->on('surcategories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories',function(Blueprint $table){
            $table->dropForeign('categories_surcategorie_id_foreign');
            $table->removeColumn('surcategorie_id');

        });
    }
}
