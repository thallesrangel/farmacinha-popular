<?php

namespace App\Repositories;

use App\Models\Collaborator;
use App\Repositories\Contracts\CollaboratorRepositoryInterface;

class CollaboratorRepositoryEloquent implements CollaboratorRepositoryInterface
{
    protected $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }

    public function get()
    {
        return $this->collaborator->where('flag_status', "enabled")->get();
    }

    public function getPaginate()
    {   
        return $this->collaborator->where('flag_status', "enabled")->orderBy('id', 'DESC')->paginate(8);
    }

    public function getById($id)
    {
        return $this->collaborator->whereId($id)->first();
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

    public function disable($id)
    {
        $collaborator = $this->collaborator->find($id);
        $collaborator->update(['flag_status' => "disabled" ]);

        return $collaborator;
    }

    public function disableSelected($ids)
    {
        return $this->collaborator->whereIn('id', explode(',', $ids))->update(['flag_status' => "disabled"]);
    }
}
