<?php

namespace App\Repositories;


use App\Models\Vente;
use Illuminate\database\Eloquent\Collection;

class VenteRepository
{
    /**
     * @return Collection
     */
    public function all(): ?Collection
    {
        return Vente::all();
    }

    /**
     * @param int $numeroVente
     * @return mixed
     */
    public function findByNumeroVente(int $numeroVente)
    {
        return Vente::where('numeroVente', $numeroVente)->first();
    }
}
