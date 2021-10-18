<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Surcategorie;
use App\Models\User;
use App\Models\Vente;
use App\Repositories\CategorieRepository;
use App\Repositories\LotRepository;
use App\Repositories\SurcategorieRepository;
use App\Services\LotService;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Repositories\VenteRepository;
use Maatwebsite\Excel\Excel;


class PagesController extends Controller
{
    private $surcategorieRepository;
    private $categorieRepository;
    private $venteRepository;
    private $lotRepository;
    private $lotService;

    public function __construct(
        LotService             $lotService,
        VenteRepository        $venteRepository,
        SurcategorieRepository $surcategorieRepository,
        CategorieRepository    $categorieRepository,
        LotRepository          $lotRepository
    )
    {
        $this->lotRepository = $lotRepository;
        $this->venteRepository = $venteRepository;
        $this->surcategorieRepository = $surcategorieRepository;
        $this->categorieRepository = $categorieRepository;
        $this->lotService = $lotService;
    }


    /**
     * @return View
     */
    public function showAccueil(): View
    {
        $lastVente = $this->venteRepository->findLastVente();
        $lastLots = $lastVente->lots->sortByDesc->take(3);
        return view('accueil', compact('lastLots'));
    }

    /**
     * @return View
     */
    public function showVenteActuelle(): View
    {
        $lastVente = $this->venteRepository->findLastVente();
        $lastLots = $lastVente->lots;
        $surcategories = $this->lotService->getSurcategorieFromVente($lastVente);

//        foreach ($surcategories as $surcategorie=>$value){
//            dd($value["categories"][0]->getId());
//        }

        return view('vente.vente-actuelle', compact('lastVente', 'surcategories', 'lastLots'));
    }

    /**
     * @return View
     */
    public function showVenteAncienne(): View
    {
        return view('vente.vente-ancienne');
    }

    /**
     * @return View
     */
    public function showExpertise(): View
    {
        return view('expertise');
    }

    /**
     * @return View
     */
    public function showMaisonRoumet(): View
    {
        return view('maison-roumet');
    }

    /**
     * @return View
     */
    public function showVendreAcheter(): View
    {
        return view('vendre-acheter');
    }

    /**
     * @return View
     */
    public function showContact(): View
    {
        return view('contact');
    }

}
