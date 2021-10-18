<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Repositories\CategorieRepository;
use App\Repositories\SurcategorieRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private $categorieRepository;
    private $surcategorieRepository;
    public function __construct(CategorieRepository $categorieRepository, SurcategorieRepository $surcategorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
        $this->surcategorieRepository = $surcategorieRepository;
    }

    /**
     * @return View
     */
    public function showFormCategorie(): View
    {
        $surcategories = $this->surcategorieRepository->all();
        $categories = new Collection();
        foreach ($surcategories as $surcategorie){
            foreach ($surcategorie->categories as $categorie){
                $categories->add($categorie);
            }

        }
        return view('admin.formCategorie', compact('surcategories','categories'));
    }

    /**
     * @param Request $request
     */
    public function postCategorie(Request $request)
    {
        $categorie = new Categorie();
        $inputCategorie = $request->categorie;
        $inputSurcategorie = $request->surcategorie;

//        if(in_array($input,$this->categorieRepository->all())){
//            dd('it exists');
//        }
        $categorie->name = $inputCategorie;
        $categorie->surcategorie_id = $inputSurcategorie;
        $categorie->save();
        return redirect()->route('formCategorie')->with('success', 'Catégorie ' . $inputCategorie . ' a été créé.');

    }
}
