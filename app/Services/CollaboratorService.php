<?php

namespace App\Services;

use App\Repositories\collaboratorRepository;

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
}
