<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * @property int $id
 * @property string $name
 * @property int $lot_id
 * @property int|null $surcategorie_id
 * @property Collection|Lot[] $lots
 * @property Surcategorie|null $surcategorie
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

    /**
     * @return int|null
     */
    public function getSurcategorieId(): ?int
    {
        return $this->surcategorie_id;
    }

    /**
     * @param int|null $surcategorie_id
     */
    public function setSurcategorieId(?int $surcategorie_id): void
    {
        $this->surcategorie_id = $surcategorie_id;
    }

    /**
     * @return HasMany
     */
    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class);
    }

    /**
     * @return BelongsTo
     */
    public function surcategorie(): BelongsTo
    {
        return $this->belongsTo(Surcategorie::class);
    }

}
