<?php

namespace App\Repositories;

use App\Models\DrugType;
use App\Repositories\Contracts\DrugTypeRepositoryInterface;

class DrugTypeRepositoryEloquent implements DrugTypeRepositoryInterface
{
    protected $drugType;

    public function __construct(DrugType $drugType)
    {
        $this->drugType = $drugType;
    }

    public function get()
    {
        return $this->drugType->get();
    }
}
