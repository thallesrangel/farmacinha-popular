<?php

namespace App\Services;

use App\Http\Requests\DrugOutRequest;
use App\Repositories\Contracts\DrugOutRepositoryInterface;

class DrugOutService
{
    protected $drugOutRepository;

    public function __construct(DrugOutRepositoryInterface $drugOutRepository)
    {
        $this->drugOutRepository = $drugOutRepository;
    }

    public function store(DrugOutRequest $request)
    {
        return $this->drugOutRepository->store($request);
    }
}
