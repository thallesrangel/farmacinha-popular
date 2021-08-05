<?php

namespace App\Repositories;

use App\Models\Laboratory;
use App\Repositories\Contracts\LaboratoryRepositoryInterface;

class LaboratoryRepositoryEloquent implements LaboratoryRepositoryInterface
{
    protected $people;

    public function __construct(Laboratory $laboratory)
    {
        $this->laboratory = $laboratory;
    }

    public function get()
    {
        return $this->laboratory->get();
    }
}

