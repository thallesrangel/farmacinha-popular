<?php

namespace App\Services;

use App\Repositories\Contracts\DrugAvailableRepositoryInterface;

class DrugAvailableService
{
    protected $drugAvailableRepository;

    public function __construct(DrugAvailableRepositoryInterface $drugAvailableRepository)
    {
        $this->drugAvailableRepository = $drugAvailableRepository;
    }

    public function get()
    {
        return $this->drugAvailableRepository->get();
    }

    public function getPaginate()
    {
        return $this->drugAvailableRepository->getPaginate();
    }
}
