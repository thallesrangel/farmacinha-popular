<?php

namespace App\Repositories;

use App\Models\Unity;

class UnityRepository
{
    protected $unity;

    public function __construct(Unity $unity)
    {
        $this->unity = $unity;
    }

    public function get()
    {
        return $this->unity->get();
    }

    public function getPaginate()
    {   
        return $this->unity->paginate(10);
    }

    public function getById($idUnity)
    {
        return $this->unity->where('id', $idUnity)->first();
    }

    public function getByStates($state)
    {
        return $this->unity->where('states', $state)->get();
    }

    public function getByStatesPaginate($state)
    {
        return $this->unity->where('states', $state)->paginate(10);
    }

    public function store($data)
    {
        $unity = new $this->unity;
        $unity->corporate_name = $data['corporate_name'];
        $unity->cnes = $data['cnes'];
        $unity->states = $data['states'];

        $unity->save();

        return $unity->fresh();
    }

    public function disabled($idUnity)
    {
        $data = $this->unity->whereId($idUnity)->update(['flag_status' => "disabled"]);
    }
}
