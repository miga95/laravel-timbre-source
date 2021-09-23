<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use App\Models\Vente;
use App\Repositories\CategorieRepository;
use App\Repositories\SurcategorieRepository;
use App\Repositories\VenteRepository;
use DateTimeImmutable;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Imports\LotImport;
use Maatwebsite\Excel\Facades\Excel;

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
                $photo->storeAs('timbres', $fileName);
                $lot->photo = $photo->getRealPath();;
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
     * @return string
     */
    public function import(Request $request)
    {
        Excel::import(new LotImport, $request->file('csvLot'));
        return "Les lots ont été importés";
    }


}
