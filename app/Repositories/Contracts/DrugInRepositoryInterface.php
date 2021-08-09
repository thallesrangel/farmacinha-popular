<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\DrugInRequest;

interface DrugInRepositoryInterface
{
    public function get();
    public function getById($id);
    public function count();
    public function save(DrugInRequest $id);
    public function getPaginate();
}