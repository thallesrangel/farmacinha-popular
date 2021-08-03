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
                $data = $this->states->where('id', session('collaborator.state_id'))->get();
                break;
        }

        return $data->toArray();
    }
}
