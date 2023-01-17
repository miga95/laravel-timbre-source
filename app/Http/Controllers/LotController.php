<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\Vente;
use App\Repositories\LotRepository;
use App\Repositories\CategorieRepository;
use App\Repositories\SurcategorieRepository;
use App\Repositories\VenteRepository;
use App\Services\LotService;
use DateTimeImmutable;
use Exception;
use Illuminate\Cache\CacheManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Imports\LotImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Collection;

class LotController extends Controller
{
    private $surcategorieRepository;
    private $categorieRepository;
    private $venteRepository;
    private $lotRepository;
    private $lotService;

    public function __construct(CategorieRepository $categorieRepository, VenteRepository $venteRepository, SurcategorieRepository $surcategorieRepository, LotRepository $lotRepository, LotService $lotService)
    {
        $this->surcategorieRepository = $surcategorieRepository;
        $this->categorieRepository = $categorieRepository;
        $this->venteRepository = $venteRepository;
        $this->lotRepository = $lotRepository;
        $this->lotService = $lotService;
    }

    /**
     * @return View
     */
    public function showLots(): View
    {
        $lots = $this->lotRepository->all();
        return view('admin.showLots', compact('lots'));
    }

    /**
     * @return View
     */
    public function formLot(): View
    {
        $surcategories = $this->surcategorieRepository->all();
        foreach ($surcategories as $surcategorie){
            $categories = $surcategorie->categories();
        }
        return view('admin.formLot',compact('surcategories') );
    }

    /**
     * @param Request $request
     */
    public function postLot(Request $request)
    {
        $lot = new Lot();
        try {
            $formData = $request->validate([
                'titre' => 'string|required|max:255',
                'qualite' => 'max:255',
                'description' => 'required',
                'nb' => 'required|numeric',
                'depart' => 'required|numeric',
                'cote' => 'required|numeric',
                'vente' => 'required|numeric',
                'surcategorie' => 'required',
                'categorie' => 'required',
                'top' => 'required|numeric',
                'start_bid' => 'nullable',
                'stop_bid' => 'nullable',
                'photo' => 'nullable'
            ]);

            $lot->fill($formData);

            $vente = $this->venteRepository->findByNumeroVente($request->vente);
            $surcategorie = $this->surcategorieRepository->findByName($request->surcategorie);
            $categorie = $this->categorieRepository->findByName($request->categorie);
            $photo = $request->file('photo');
            if ($photo) {
                $fileName = $photo->getClientOriginalName();
                $lot->setPhoto($fileName);
                $photo->storeAs('timbres', $fileName);
            }
            if ($vente != null && $surcategorie != null && $categorie != null) {
                $lot->setVenteId($vente->getId());
                $lot->setSurcategorieId($surcategorie->getId());
                $lot->setCategorieId($categorie->getId());
                $lot->save();

            }
        }catch (Exception $exception) {
            Log::error($exception->getMessage());
            return redirect()->route('formLot')->with('error',$exception->getMessage());
        }

        return redirect()->route('formLot')->with('success','Le lot a été ajouée');
    }

    /**
     * @return View
     */
    public function importForm(): View
    {
        return view('admin.import-form');
    }

    /**
     * @param int $id
     * @return View
     */
    public function showLotById(int $id): View
    {
        $lot = $this->lotRepository->find($id);
        return view('showLot',compact('lot'));
    }

    /**
     * @return string
     */
    public function import(Request $request)
    {
        Excel::import(new LotImport, $request->file('csvLot'));
        return "Les lots ont été importés";
    }

    /**
     * @param int $venteId
     * @param int $surcategorieId
     * @param int $categorieId
     * @return View
     */
    public function showSurcategoriesAndCategoriesofLastVente(int $venteId, int $surcategorieId, int $categorieId): View
    {
        $lastVente = $this->venteRepository->find($venteId);
        $filteredItems = $this->lotService->getSurcategorieAndCategoriesFromVente($lastVente);
        $lots = $this->lotService->filterByCategorie($lastVente);
        $collection = new Collection();
        $surcategories = new Collection();
        $categories = new Collection();

        foreach ($filteredItems as $filteredItem => $values) {
            foreach ($values as $value) {
                if ($filteredItem === 0) {
//                    array_push($surcategories[0], $value);
                    $surcategories->add($value);
                }
                if ($filteredItem === 1) {
//                    array_push($surcategories[1], $value);
                    $categories->add($value);

                }
            }
        }
        $collection->add($surcategories);
        $collection->add($categories);


            return view('show-surcategories-of-last-vente', compact('lastVente', 'collection','lots'));
    }

}
