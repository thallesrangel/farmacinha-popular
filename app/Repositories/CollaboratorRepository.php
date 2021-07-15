<?php

namespace App\Repositories;

use App\Models\Collaborator;

class CollaboratorRepository
{
    protected $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function get()
    {
        return $this->collaborator->get();
    }
}
