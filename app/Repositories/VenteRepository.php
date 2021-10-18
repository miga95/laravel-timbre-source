<?php

namespace App\Repositories;


use App\Models\Lot;
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
     * @param int $id
     * @return Vente
     */
    public function find(int $id):Vente
    {
        return Vente::find($id);
    }

    /**
     * @param int $numeroVente
     * @return mixed
     */
    public function findByNumeroVente(int $numeroVente)
    {
        return Vente::where('numeroVente', $numeroVente)->first();
    }

    /**
     * @return Vente|null
     */
    public function findLastVente(): ?Vente
    {
        return Vente::orderByDesc('created_at')->first();
    }




}
