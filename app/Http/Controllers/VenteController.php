<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use App\Repositories\VenteRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class VenteController extends Controller
{
    private $venteRepository;
    public function __construct(VenteRepository $venteRepository)
    {
        $this->venteRepository = $venteRepository;
    }

    /**
     * @return View
     */
    public function showVentes()
    {
        $ventes = $this->venteRepository->all();
        return view('admin.showVentes',compact('ventes'));
    }

    public function postVente(Request $request){
        try {
            $file = $request->file('catalogue');
            if ($file) {
                $fileName = $file->getClientOriginalName();
                $file->storeAs('catalogue', $fileName);
            }
            Vente::create([
                'numeroVente' => $request->numeroVente,
                'cloture' => $request->cloture,
                'info' => $request->info,
                'catalogue'=> $fileName,
            ]);
        }catch (Exception $exception){
            Log::error($exception->getMessage());
            return redirect()->route('formVente')->with('error',$exception->getMessage());
        }

        return redirect()->route('formVente')->with('success', 'La Vente ' . $request->numeroVente . ' a été créé.');

    }

    public function downloadCatalogue()
    {
        $lastVente = $this->venteRepository->findLastVente();

        return Storage::download('catalogue'.'/'.$lastVente->catalogue);
    }

}
