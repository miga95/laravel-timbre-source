<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Models\Lot;
use App\Models\Surcategorie;
use App\Models\Vente;
use Illuminate\database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LotRepository
{
    private $surcategorieRepository;

    public function __construct( SurcategorieRepository $surcategorieRepository)
    {
        $this->surcategorieRepository = $surcategorieRepository;
    }

    /**
     * @return Collection
     */
    public function all(): ?Collection
    {
       return Lot::all();

    }


    /**
     * @param int $id
     * @return Lot
     */
    public function find(int $id):Lot
    {
        return Lot::find($id);
    }

    /**
     * @param int $nolot
     * @return mixed
     */
    public function findByNoLot(int $nolot)
    {
        return Lot::where('nolot',$nolot)->first();
    }

    /**
     * @param int $vente_id
     * @param int $surcategorie_id
     * @param int $categorie_id
     * @return Collection|null
     */
    public function filterByCategorieSurcategorieLastVente(int $vente_id, int $surcategorie_id, int $categorie_id): ?Collection
    {
       return Lot::where('vente_id',$vente_id)->where('surcategorie_id', $surcategorie_id)->where('categorie_id', $categorie_id)->get();
    }

}
