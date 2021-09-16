<?php

namespace App\Http\Controllers;

use App\Models\Surcategorie;
use App\Repositories\SurcategorieRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SurcategorieController extends Controller
{
    private $surcategorieRepository;
    public function __construct(SurcategorieRepository $surcategorieRepository)
    {
        $this->surcategorieRepository = $surcategorieRepository;
    }

    /**
     * @return View
     */
    public function showFormSurcategorie(): View
    {
        return view('admin.formSurcategorie');
    }
    /**

    /**
     * @param Request $request
     */
    public function postSurcategorie(Request $request)
    {
        $surcategorie = new Surcategorie();
        $input = $request->surcategorie;
//        $surcategorie_array = $this->surcategorieRepository->all();
//        dd($surcategorie_array);
//
//        if(in_array($input,$surcategorie_array)){
//            dd('it exists');
//        }
        $surcategorie->name = $input;
        $surcategorie->save();
        return redirect()->route('formSurcategorie')->with('success', 'Surcategorie ' . $input . ' créé.');
    }
}
