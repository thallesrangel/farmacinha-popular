<?php

namespace App\Repositories;

use App\Models\drugOut;
use App\Repositories\Contracts\DrugOutRepositoryInterface;

class DrugOutRepositoryEloquent implements DrugOutRepositoryInterface
{
    protected $drugOut;

    public function __construct(DrugOut $drugOut)
    {
        $this->drugOut = $drugOut;
    }

    public function store($data)
    {
        $drugOut = new $this->drugOut;
        $drugOut->id_drug_in = $data->id_drug_in;
        $drugOut->id_unity = session('collaborator.id_unity');
        $drugOut->id_collaborator = session('collaborator.id');
        $drugOut->id_people_receiver = $data->id_people_receiver;
        $drugOut->quantity_out = $data->quantity_out;

        $drugOut->save();

        //return $drugOut->fresh();
    }
}
