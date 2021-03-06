<?php

namespace App\Services;

use App\Http\Requests\DrugInRequest;
use App\Repositories\Contracts\DrugInRepositoryInterface;

class DrugInService
{
    protected $drugInRepository;

    public function __construct(DrugInRepositoryInterface $drugInRepository)
    {
        $this->drugInRepository = $drugInRepository;
    }

    public function get()
    {
        return $this->drugInRepository->get();
    }

    public function getById($id)
    {
        return $this->drugInRepository->getById($id);
    }

    public function count()
    {
        return $this->drugInRepository->count();   
    }

    public function getPaginate()
    {
        return $this->drugInRepository->getPaginate();
    }
    
    public function save(DrugInRequest $request)
    {
        return $this->drugInRepository->save($request);
    }
}
