<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\DrugInRequest;

interface DrugInRepositoryInterface
{
    public function save(DrugInRequest $id);
}