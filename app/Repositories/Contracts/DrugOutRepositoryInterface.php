<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\DrugOutRequest;

interface DrugOutRepositoryInterface
{
    public function store(DrugOutRequest $request);
}