<?php

namespace App\Services;

use App\Repositories\collaboratorRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class CollaboratorService
{
    protected $CollaboratorRepository;

    public function __construct(CollaboratorRepository $collaboratorRepository)
    {
        $this->collaboratorRepository = $collaboratorRepository;
    }

    public function get()
    {
        return $this->collaboratorRepository->get();
    }

    public function save($data)
    {
        $response = $this->collaboratorRepository->save($data);

        return $response;
    }
}
