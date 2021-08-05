<?php

namespace App\Services;

use App\Repositories\Contracts\MeasurementRepositoryInterface;

class MeasurementService
{
    protected $measurementRepository;

    public function __construct(MeasurementRepositoryInterface $measurementRepository)
    {
        $this->measurementRepository = $measurementRepository;
    }

    public function get()
    {
        return $this->measurementRepository->get();
    }
}