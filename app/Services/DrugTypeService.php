<?php

namespace App\Services;

use App\Repositories\Contracts\DrugTypeRepositoryInterface;

class DrugTypeService
{
    protected $drugTypeRepository;

    public function __construct(DrugTypeRepositoryInterface $drugTypeRepository)
    {
        $this->drugTypeRepository = $drugTypeRepository;
    }

    public function get()
    {
        return $this->drugTypeRepository->get();
    }
}