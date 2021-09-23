<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Repositories\CategorieRepository;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    private $categorieRepository;
    public function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }


    public function postVente(Request $request){
        Vente::create([
            'numeroVente' => $request->numeroVente,
            'cloture' => $request->cloture,
            'info' => $request->info
        ]);
        return redirect()->route('formVente')->with('success', 'La Vente ' . $request->numeroVente . ' a été créé.');

    }

}
