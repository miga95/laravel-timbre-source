<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Repositories\CategorieRepository;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private $categorieRepository;
    public function __construct(CategorieRepository $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }

    /**
     * @return View
     */
    public function showFormCategorie(): View
    {
        return view('admin.formCategorie');
    }

    /**
     * @param Request $request
     */
    public function postCategorie(Request $request)
    {
        $categorie = new Categorie();
        $input = $request->categorie;
//        if(in_array($input,$this->categorieRepository->all())){
//            dd('it exists');
//        }
        $categorie->name = $input;
        $categorie->save();
        return redirect()->route('formCategorie')->with('success', 'Catégorie ' . $input . ' a été créé.');

    }
}
