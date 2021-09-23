<?php

namespace App\Http\Controllers;

use App\Models\Adresse;
use App\Models\Lot;
use App\Models\User;
use App\Models\Vente;
use App\Repositories\AdresseRepository;
use DateTimeImmutable;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Imports\LotImport;
use Maatwebsite\Excel\Facades\Excel;

class AdresseController extends Controller
{
    private $adresseRepository;

    public function __construct(AdresseRepository $adresseRepository)
    {
        $this->adresseRepository = $adresseRepository;

    }

    /**
     * @return View
     */
    public function showAdresse(): View
    {
        $adresses = Auth::user()->adresses;

        $adresse=[];
        if(count($adresses)<2){
            $adresse=$adresses;
        }
        return view('user.adresse',compact('adresses','adresse'));
    }

    /**
     * @param Request $request
     */
    public function postAdresse(Request $request)
    {
        try {
            $formData = $request->validate([
                'titre' => 'string|nullable|max:255',
                'societe' => 'string|nullable|max:255',
                'adresse' => 'string|nullable',
                'code_postal' => 'numeric|nullable',
                'ville' => 'string|nullable',
                'pays' => 'string|nullable|max:255',
                'informations_supplementaire' => 'string|nullable',
                'telephone_portable' => 'numeric|nullable'
            ]);
            $adresse = new Adresse();
            $adresse->fill($formData);
            $adresse->setUserId(Auth::user()->id);
            $adresse->save();
        }catch(Exception $exception){
            Log::error($exception->getMessage());
            return redirect()->back()->with('error',$exception->getMessage());
        }

        return redirect()->route('show-adresse')->with('success','Adresse sauvegardé');
    }


}
