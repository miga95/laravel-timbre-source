<?php

namespace App\Repositories;

use App\Models\Surcategorie;
use Illuminate\database\Eloquent\Collection;

class SurcategorieRepository
{
    /**
     * @return Collection
     */
    public function all(): ?Collection
    {
        return Surcategorie::all();
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function findByName(string $name)
    {
        return Surcategorie::where('name', $name)->first();
    }

    /**
     * @param int $id
     * @return Surcategorie|null
     */
    public function find(int $id): ? Surcategorie
    {
        return Surcategorie::find($id);
    }
}
