<?php

namespace App\Imports;

use App\Models\Lot;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LotImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    * @return Lot|null
    */
    public function model(array $row): ?Lot
    {
        return new Lot([
            'titre'=>$row['titre'],
            'description'=>$row['description'],
            'qualite'=>$row['qualite'],
            'nb'=>$row['nb'],
            'depart'=>$row['depart'],
            'top'=>$row['top'],

        ]);
    }
}
