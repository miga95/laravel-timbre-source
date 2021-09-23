<?php

namespace App\Repositories;

use App\Models\Adresse;
use App\Models\User;
use Illuminate\database\Eloquent\Collection;

class AdresseRepository
{
    /**
     * @return Collection|Adresse[]
     */
    public function all()
    {
        return Adresse::all();
    }


    /**
     * @param int $userId
     * @return mixed
     */
    public function findByUserId(int $userId)
    {
       return Adresse::where('user_id',$userId);
    }
}
