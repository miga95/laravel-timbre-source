<?php

namespace App\Models;


use DateTimeImmutable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $vente_id
 * @property string $titre
 * @property string $surcategorie_id
 * @property string $categorie_id
 * @property string $qualite
 * @property int $nolot
 * @property string $description
 * @property string $photo
 * @property string $nb
 * @property int $cote
 * @property int $depart
 * @property int $atteint
 * @property int $top
 * @property DateTimeImmutable|null $start_bid
 * @property DateTimeImmutable|null $stop_bid
 */

class Lot extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'vente_id',
        'surcategorie_id',
        'categorie_id',
        'qualite',
        'nolot',
        'photo',
        'nb',
        'cote',
        'depart',
        'atteint',
        'top',
        'start_bid',
        'stop_bid',
    ];

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }


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
    public function getVenteId(): int
    {
        return $this->vente_id;
    }

    /**
     * @param int $vente_id
     */
    public function setVenteId(int $vente_id): void
    {
        $this->vente_id = $vente_id;
    }

    /**
     * @return string
     */
    public function getSurcategorieId(): string
    {
        return $this->surcategorie_id;
    }

    /**
     * @param string $surcategorie_id
     */
    public function setSurcategorieId(string $surcategorie_id): void
    {
        $this->surcategorie_id = $surcategorie_id;
    }

    /**
     * @return string
     */
    public function getCategorieId(): string
    {
        return $this->categorie_id;
    }

    /**
     * @param string $categorie_id
     */
    public function setCategorieId(string $categorie_id): void
    {
        $this->categorie_id = $categorie_id;
    }

    /**
     * @return string
     */
    public function getQualite(): string
    {
        return $this->qualite;
    }

    /**
     * @param string $qualite
     */
    public function setQualite(string $qualite): void
    {
        $this->qualite = $qualite;
    }

    /**
     * @return int
     */
    public function getNolot(): int
    {
        return $this->nolot;
    }

    /**
     * @param int $nolot
     */
    public function setNolot(int $nolot): void
    {
        $this->nolot = $nolot;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return string
     */
    public function getNb(): string
    {
        return $this->nb;
    }

    /**
     * @param string $nb
     */
    public function setNb(string $nb): void
    {
        $this->nb = $nb;
    }

    /**
     * @return int
     */
    public function getCote(): int
    {
        return $this->cote;
    }

    /**
     * @param int $cote
     */
    public function setCote(int $cote): void
    {
        $this->cote = $cote;
    }

    /**
     * @return int
     */
    public function getDepart(): int
    {
        return $this->depart;
    }

    /**
     * @param int $depart
     */
    public function setDepart(int $depart): void
    {
        $this->depart = $depart;
    }

    /**
     * @return int
     */
    public function getAtteint(): int
    {
        return $this->atteint;
    }

    /**
     * @param int $atteint
     */
    public function setAtteint(int $atteint): void
    {
        $this->atteint = $atteint;
    }

    /**
     * @return int
     */
    public function getTop(): int
    {
        return $this->top;
    }

    /**
     * @param int $top
     */
    public function setTop(int $top): void
    {
        $this->top = $top;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getStartBid(): ?DateTimeImmutable
    {
        return $this->start_bid;
    }

    /**
     * @param DateTimeImmutable|null $start_bid
     */
    public function setStartBid(?DateTimeImmutable $start_bid): void
    {
        $this->start_bid = $start_bid;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getStopBid(): ?DateTimeImmutable
    {
        return $this->stop_bid;
    }

    /**
     * @param DateTimeImmutable|null $stop_bid
     */
    public function setStopBid(?DateTimeImmutable $stop_bid): void
    {
        $this->stop_bid = $stop_bid;
    }


    public function vente()
    {
        return $this->belongsTo(Vente::class);
    }
}
