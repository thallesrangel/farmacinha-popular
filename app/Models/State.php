<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    private $states = [
        'AC',
        'AL',
        'AP',
        'AM',
        'BA',
        'CE',
        'ES',
        'GO',
        'MA',
        'MT',
        'MS',
        'MG', 
        'PA',
        'PB',
        'PR',
        'PE',
        'PI',
        'RJ',
        'RN',
        'RS',
        'RO',
        'RR',
        'SC',
        'SP',
        'SE',
        'TO',
        'DF'
    ];

    public function filterStates()
    {
        $data = [];

        switch (session('collaborator.role')) {
            case 'gestor_geral':
                $data = $this->states;
                break;
            default:
                $data = [session('collaborator.states')];
                break;
        }

        return $data;
    }
}
