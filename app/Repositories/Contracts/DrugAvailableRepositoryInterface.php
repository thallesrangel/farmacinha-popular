<?php

namespace App\Repositories\Contracts;

interface DrugAvailableRepositoryInterface
{
    public function get();
    public function getPaginate();
}