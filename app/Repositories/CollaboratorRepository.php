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
        return $this->collaborator->where('flag_deleted', 0)->get();
    }

    public function save($data)
    {
        $collaborator = new $this->collaborator;
        $collaborator->first_name = $data->id_unity;
        $collaborator->first_name = $data->first_name;
        $collaborator->last_name = $data->last_name;
        $collaborator->cpf = $data->cpf;
        $collaborator->states = $data->states;
        $collaborator->role = $data->role;
        $collaborator->email = $data->email;
        $collaborator->password = md5($data->password);
        $collaborator->professional_record = $data->professional_record;

        $collaborator->save();

        return $collaborator->fresh();
    }

    public function delete($id)
    {
        $collaborator = $this->collaborator->find($id);
        $collaborator->update(['flag_deleted' => 1 ]);

        return $collaborator;
    }
}
