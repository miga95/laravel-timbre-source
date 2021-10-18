<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id;
 * @property string $name;
 *
 * @property Collection|Lot[] $lots;
 * @property Collection|Categorie[] $categories;
 */

class Surcategorie extends Model
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }



    public function lots()
    {
        return $this->hasMany(Lot::class);
    }

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }

    use HasFactory;

}
