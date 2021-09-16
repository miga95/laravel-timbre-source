<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\Vente;
use App\Repositories\CategorieRepository;
use App\Repositories\SurcategorieRepository;
use App\Repositories\VenteRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LotController extends Controller
{
    private $surcategorieRepository;
    private $categorieRepository;
    private $venteRepository;

    public function __construct(CategorieRepository $categorieRepository, VenteRepository $venteRepository, SurcategorieRepository $surcategorieRepository)
    {
        $this->surcategorieRepository = $surcategorieRepository;
        $this->categorieRepository = $categorieRepository;
        $this->venteRepository = $venteRepository;
    }

    /**
     * @return View
     */
    public function formLot(): View
    {
        return view('admin.formLot');
    }

    /**
     * @param Request $request
     */
    public function postLot(Request $request){
        $lot = new Lot();
        $lot->titre = $request->titre;
        $lot->qualite = $request->qualite;
        $lot->description = $request->description;
        $lot->nb = $request->nombre;
        $lot->cote = $request->cote;
        $vente = $this->venteRepository->findByNumeroVente($request->vente);
        $surcategorie = $this->surcategorieRepository->findByName($request->surcategorie);
        $categorie = $this->categorieRepository->findByName($request->categorie);
        if($vente!=null && $surcategorie!=null && $categorie!=null){
            $lot->vente_id = $vente->getId();
            $lot->surcategorie_id = $surcategorie->getId();
            $lot->categorie_id = $categorie->getId();
            $lot->save();
            return redirect()->route('formLot')->with('success', 'Surcategorie ' . $lot->titre . ' a été créé.');

        }else{
            return redirect()->route('formLot')->with('error', 'Erruer lors de la création du lot');

        }


    }
}
