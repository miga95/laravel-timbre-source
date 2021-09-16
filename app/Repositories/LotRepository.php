<?php

namespace App\Repositories;

use App\Models\Categorie;
use App\Models\Lot;
use Illuminate\database\Eloquent\Collection;

class LotRepository
{


    /**
     * @return Collection
     */
    public function all(): ?Collection
    {
       return Lot::all();

    }


    /**
     * @param int $nolot
     * @return mixed
     */
    public function findByNoLot(int $nolot)
    {
        return Lot::where('nolot',$nolot)->first();
    }

}
