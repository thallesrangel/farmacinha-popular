<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    private $gestor_geral = ['gestor_geral' => 'Gestor Geral'];
    private $gestor_estadual = ['gestor_estadual' => 'Gestor Estadual'];
    private $gestor_unidade = ['gestor_unidade' => 'Gestor de Unidade'];
    private $analista = ['analista' => 'Analista'];
    private $assistente = ['assistente' => 'Assistente'];

    public function filterRole()
    {
        $roles = [];

        switch (session('collaborator.role')) {
            case 'gestor_geral':
                $roles = array_merge($this->gestor_geral, $this->gestor_estadual, $this->gestor_unidade, $this->analista, $this->assistente);
                break;
            case 'gestor_estadual':
                $roles = array_merge($this->gestor_unidade, $this->analista, $this->assistente);
                break;
            case 'gestor_unidade':
                $roles = array_merge($this->analista, $this->assistente);
                break;
        }

        return $roles;
    }

    public function roleName()
    {
        $data = session('collaborator.role');
        return $this->$data;
    }
}
