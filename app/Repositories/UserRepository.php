<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\database\Eloquent\Collection;

class UserRepository
{
    /**
     * @return Collection|User[]
     */
    public function all()
    {
        return User::all();
    }


    /**
     * @param string $prenom
     * @return mixed
     */
    public function findByPrenom(string $prenom)
    {
        return User::where('prenom',$prenom)->first();
    }
}
