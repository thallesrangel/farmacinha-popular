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

    public function save(DrugInRequest $request)
    {
        return $this->drugInRepository->save($request);
    }
}
