<?php

namespace App\Models;

use DateTimeImmutable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id;
 * @property string $nom;
 * @property string $prenom;
 * @property string $civilite;
 * @property string email;
 * @property DateTimeImmutable|null $date_naissance;
 * @property int $newsletter;
 * @property int $role_id;
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prenom',
        'email',
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getCivilite(): string
    {
        return $this->civilite;
    }

    /**
     * @param string $civilite
     */
    public function setCivilite(string $civilite): void
    {
        $this->civilite = $civilite;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return DateTimeImmutable|null
     */
    public function getDateNaissance(): ?DateTimeImmutable
    {
        return $this->date_naissance;
    }

    /**
     * @param DateTimeImmutable|null $date_naissance
     */
    public function setDateNaissance(?DateTimeImmutable $date_naissance): void
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return int
     */
    public function getNewsletter(): int
    {
        return $this->newsletter;
    }

    /**
     * @param int $newsletter
     */
    public function setNewsletter(int $newsletter): void
    {
        $this->newsletter = $newsletter;
    }

}
