<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $name
 * @property int $lot_id
 * @property Collection|Lot[] $lots
 */

class Categorie extends Model
{
    use HasFactory;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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

    /**
     * @return int
     */
    public function getLotId(): int
    {
        return $this->lot_id;
    }

    /**
     * @param int $lot_id
     */
    public function setLotId(int $lot_id): void
    {
        $this->lot_id = $lot_id;
    }


    public function lots(): void
    {
        $this->hasMany(Lot::class);
    }



}
