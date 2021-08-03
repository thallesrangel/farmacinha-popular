<?php

namespace App\Repositories;

use App\Models\State;

class StateRepository
{
    protected $states;

    public function __construct(State $states)
    {
        $this->states = $states;
    }

    public function filterState()
    {
        $data = [];
        switch (session('collaborator.role')) {
            case 'gestor_geral':
                $data = $this->states->get();
                break;
            default:
                $data = [session('collaborator.states')];
                break;
        }

        return $data->toArray();
    }
}
