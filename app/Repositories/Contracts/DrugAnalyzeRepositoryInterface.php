<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\DrugAnalyzeRequest;

interface DrugAnalyzeRepositoryInterface
{
    public function get();
    public function getById($id);
    public function getByIdDrugIn($id);
    public function store(DrugAnalyzeRequest $id);
    public function getPaginate();
}