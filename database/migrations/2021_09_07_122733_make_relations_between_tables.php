<?php

use App\Models\Lot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MakeRelationsBetweenTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('lots', function(Blueprint $table){
//
//            $table->foreign('vente_id')->references('id')->on('ventes')->onDelete('set null');
//            $table->foreign('surcategorie_id')->references('id')->on('surcategories')->onDelete('set null');
//            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('set null');
//
//        });
//        ini_set('memory_limit', '-1');
//        $lots = Lot::all();
//
//        foreach ($lots as $lot) {
//            $surcategorie = DB::table('surcategories')->where('name',$lot->surcategorie_id)->first();
//            $lot->surcategorie_id=$surcategorie->id;
//            $categorie = DB::table('categories')->where('name',$lot->categorie_id)->first();
//            $lot->categorie_id=$categorie->id;
//            $vente = DB::table('ventes')->where('numeroVente',$lot->vente_id)->first();
//            $lot->vente_id=$vente->id;
//            $lot->save();
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('lots', function(Blueprint $table){
//
//            $table->dropForeign('lots_vente_id_foreign');
//            $table->dropForeign('lots_surcategorie_id_foreign');
//            $table->dropForeign('lots_categorie_id_foreign');
//        });
    }
}
