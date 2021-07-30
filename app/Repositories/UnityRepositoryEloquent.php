<?php

namespace App\Repositories;

use App\Models\Unity;
use App\Repositories\Contracts\UnityRepositoryInterface;

class UnityRepositoryEloquent implements UnityRepositoryInterface
{
    protected $unity;

    public function __construct(Unity $unity)
    {
        $this->unity = $unity;
    }

    public function get()
    {
        return $this->unity->where('flag_status', 'enabled')->get();
    }

    public function getPaginate()
    {   
        return $this->unity->where('flag_status', 'enabled')->paginate(10);
    }

    public function getById($idUnity)
    {
        return $this->unity->where('id', $idUnity)->first();
    }

    public function getByStates($state)
    {
        return $this->unity->where('states', $state)->where('flag_status', 'enabled')->get();
    }

    public function getByStatesPaginate($state)
    {
        return $this->unity->where('states', $state)->where('flag_status', 'enabled')->paginate(10);
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
        $unity = $this->unity->find($idUnity);
        $unity->flag_status = "disabled";
        $unity->save();

        return $unity->fresh();
    }
}
