<?php

namespace App\Services;

use App\Models\Categorie;
use App\Models\Surcategorie;
use App\Models\Vente;
use App\Repositories\CategorieRepository;
use App\Repositories\SurcategorieRepository;
use Illuminate\Database\Eloquent\Collection;

class LotService
{
    private $categorieRepository;
    private $surcategorieRepository;

    public function __construct(
        CategorieRepository    $categorieRepository,
        SurcategorieRepository $surcategorieRepository
    )
    {

        $this->categorieRepository = $categorieRepository;
        $this->surcategorieRepository = $surcategorieRepository;
    }

    /**
     * @param Vente $vente
     * @return Collection
     */
    public function getSurcategorieAndCategoriesFromVente(Vente $vente): Collection
    {
        $lots = $vente->lots;
        $surcategorieCollection = new Collection();
        $surcategories = $lots->groupBy('surcategorie_id');
        $finalCollection = new Collection();
        foreach ($surcategories as $surcategorieId => $values) {
            $surcategorie = $this->surcategorieRepository->find($surcategorieId);
            if (!$surcategorieCollection->contains('id', $surcategorieId)) {
                $surcategorieCollection->add($surcategorie);
            }
        }

        $categories = $lots->groupBy('categorie_id');
        $categorieCollection = new Collection();
        foreach ($categories as $categorieId => $values){
            $categorie = $this->categorieRepository->find($categorieId);
            if(!$categorieCollection->contains('id',$categorieId)){
                $categorieCollection->add($categorie);
            }
        }
        $finalCollection->add($surcategorieCollection);
        $finalCollection->add($categorieCollection);


        return $finalCollection;
    }

    /**
     * @param Vente $vente
     * @return Collection
     */
    public function getSurcategoriesOfLastvente(Vente $vente): Collection
    {
        $lots = $vente->lots;
        $surcategorieCollection = new Collection();
        $surcategories = $lots->groupBy('surcategorie_id');

        foreach ($surcategories as $surcategorieId => $values) {
            $surcategorie = $this->surcategorieRepository->find($surcategorieId);
            if (!$surcategorieCollection->contains('id', $surcategorieId)) {
                $surcategorieCollection->add($surcategorie);
            }
        }
        return $surcategorieCollection;
    }

    /**
     * @param Vente $lastVente
     * @return Collection|null
     */
    public function filterByCategorie(Vente $lastVente): ?Collection
    {
        $collection = new Collection();
        $categoriesId = $lastVente->lots->groupBy('categorie_id');
        $array = [];
        foreach ($categoriesId as $categorieId => $lots) {
            $categorie = $this->categorieRepository->find($categorieId);
            foreach ($lots as $lot){
                if($categorie->getId()==$lot->getCategorieId()){

                        array_push($array,[$categorie->getName()=>$lot]);
                }
            }
        }
        return $collection;
    }
}
