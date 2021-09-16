<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PopulateAllTablesFromLots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//        //populate ventes
//        $lots = DB::table('lots')->pluck('vente_id')->unique();
//        foreach ($lots as $key => $value) {
//            DB::table('ventes')->insert(array('numeroVente' => $value));
//        }
//        //peupler categorie
//        $lots = DB::table('lots')->pluck('categorie_id')->unique();
//        foreach ($lots as $key => $value) {
//            DB::table('categories')->insert(array('name' => $value));
//        }
//        //peupler surcategorie
//        $lots = DB::table('lots')->pluck('surcategorie_id')->unique();
//        foreach ($lots as $key => $value) {
//            DB::table('surcategories')->insert(array('name' => $value));
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //populate ventes
        $lots = DB::table('lots')->pluck('vente_id')->unique();
        foreach ($lots as $key => $value) {
            DB::table('ventes')->insert(array('numeroVente' => $value));
        }
        //peupler categorie
        $lots = DB::table('lots')->pluck('categorie_id')->unique();
        foreach ($lots as $key => $value) {
            DB::table('categories')->insert(array('name' => $value));
        }
        //peupler surcategorie
        $lots = DB::table('lots')->pluck('surcategorie_id')->unique();
        foreach ($lots as $key => $value) {
            DB::table('surcategories')->insert(array('name' => $value));
        }

    }
}


