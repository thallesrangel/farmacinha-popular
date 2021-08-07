<?php

namespace App\Services;

use App\Http\Requests\DrugAnalyzeRequest;
use App\Repositories\Contracts\DrugAnalyzeRepositoryInterface;

class DrugAnalyzeService
{
    protected $drugAnalyzeRepository;

    public function __construct(DrugAnalyzeRepositoryInterface $drugAnalyzeRepository)
    {
        $this->drugAnalyzeRepository = $drugAnalyzeRepository;
    }

    public function get()
    {
        return $this->drugAnalyzeRepository->get();
    }

    public function getById($id)
    {
        return $this->drugAnalyzeRepository->getById($id);
    }
    
    public function getByIdDrugIn($id)
    {
        return $this->drugAnalyzeRepository->getByIdDrugIn($id);
    }

    public function getPaginate()
    {
        return $this->drugAnalyzeRepository->getPaginate();
    }
    
    public function store(DrugAnalyzeRequest $request)
    {
        return $this->drugAnalyzeRepository->store($request);
    }
}
