<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id;
 * @property int $numeroVente;
 * @property DateTimeImmutable|null $cloture;
 * @property string $info;
 * @property int $lot_id;
 * @property string $catalogue;
 * @property Collection|Lot[] $lots;
 */

class Vente extends Model
{
    protected $fillable = ['numeroVente','cloture','info','catalogue'];

    use HasFactory;
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getNumeroVente(): int
    {
        return $this->numeroVente;
    }

    /**
     * @param int $numeroVente
     */
    public function setNumeroVente(int $numeroVente): void
    {
        $this->numeroVente = $numeroVente;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getCloture(): ?DateTimeImmutable
    {
        return $this->cloture;
    }

    /**
     * @return string
     */
    public function getCatalogue(): string
    {
        return $this->catalogue;
    }

    /**
     * @param string $catalogue
     */
    public function setCatalogue(string $catalogue): void
    {
        $this->catalogue = $catalogue;
    }

    /**
     * @param DateTimeImmutable|null $cloture
     */
    public function setCloture(?DateTimeImmutable $cloture): void
    {
        $this->cloture = $cloture;
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * @param string $info
     */
    public function setInfo(string $info): void
    {
        $this->info = $info;
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
     * @return HasMany
     */
    public function lots(): HasMany
    {
        return $this->hasMany(Lot::class);
    }


}
