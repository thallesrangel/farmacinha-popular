<?php

namespace App\Repositories;

use App\Models\Measurement;
use App\Repositories\Contracts\MeasurementRepositoryInterface;

class MeasurementRepositoryEloquent implements MeasurementRepositoryInterface
{
    protected $measurement;

    public function __construct(Measurement $measurement)
    {
        $this->measurement = $measurement;
    }

    public function get()
    {
        return $this->measurement->get();
    }
}

