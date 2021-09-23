<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @property int $id
 * @property string $titre
 * @property string $societe
 * @property string $adresse
 * @property int $code_postal
 * @property string $ville
 * @property string $pays
 * @property string $informations_supplementaire
 * @property int $telephone_portable
 * @property int $telephone_domicile
 * @property int $user_id
 */

class Adresse extends Model
{
    use HasFactory;
    protected $fillable =[
        'titre',
        'societe',
        'adresse',
        'code_postal',
        'ville',
        'pays',
        'informations_supplementaire',
        'telephone_portable',
        'telephone_domicile',
        'user_id'
    ];

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
     * @return string
     */
    public function getSociete(): string
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete(string $societe): void
    {
        $this->societe = $societe;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getCodePostal(): int
    {
        return $this->code_postal;
    }

    /**
     * @param int $code_postal
     */
    public function setCodePostal(int $code_postal): void
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return string
     */
    public function getInformationsSupplementaire(): string
    {
        return $this->informations_supplementaire;
    }

    /**
     * @param string $informations_supplementaire
     */
    public function setInformationsSupplementaire(string $informations_supplementaire): void
    {
        $this->informations_supplementaire = $informations_supplementaire;
    }

    /**
     * @return int
     */
    public function getTelephonePortable(): int
    {
        return $this->telephone_portable;
    }

    /**
     * @param int $telephone_portable
     */
    public function setTelephonePortable(int $telephone_portable): void
    {
        $this->telephone_portable = $telephone_portable;
    }

    /**
     * @return int
     */
    public function getTelephoneDomicile(): int
    {
        return $this->telephone_domicile;
    }

    /**
     * @param int $telephone_domicile
     */
    public function setTelephoneDomicile(int $telephone_domicile): void
    {
        $this->telephone_domicile = $telephone_domicile;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    public function user()
    {
        return $this->belongsTo(Adresse::class);
    }
}
