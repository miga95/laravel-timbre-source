<?php

namespace App\Repositories;

use App\Models\Categorie;
use Illuminate\database\Eloquent\Collection;

class CategorieRepository
{
    /**
     * @param int $id
     * @return Categorie|null
     */
    public function find(int $id): ?Categorie
    {
        return Categorie::find($id);
    }

    /**
     * @return Collection
     */
    public function all(): ?Collection
    {
        return Categorie::all();
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function findByName(string $name)
    {
        return Categorie::where('name', $name)->first();
    }
}
