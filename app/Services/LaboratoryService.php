<?php

namespace App\Services;

use App\Repositories\Contracts\LaboratoryRepositoryInterface;

class LaboratoryService
{
    protected $laboratoryRepository;

    public function __construct(LaboratoryRepositoryInterface $laboratoryRepository)
    {
        $this->laboratoryRepository = $laboratoryRepository;
    }

    public function get()
    {
        return $this->laboratoryRepository->get();
    }
}