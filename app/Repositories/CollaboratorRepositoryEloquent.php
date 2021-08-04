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
        return $this->collaborator->where('flag_status', "enabled")
                                    ->with('states')
                                    ->with('city')
                                    ->get();
    }

    public function getPaginate()
    {   
        return $this->collaborator->where('flag_status', "enabled")
                                    ->with('states')
                                    ->with('city')
                                    ->orderBy('id', 'DESC')
                                    ->paginate(8);
    }

    public function getById($id)
    {
        return $this->collaborator->whereId($id)->first();
    }

    public function save($data)
    {
        $collaborator = new $this->collaborator;
        $collaborator->id_unity = session('collaborator.id_unity');
        $collaborator->first_name = $data->first_name;
        $collaborator->last_name = $data->last_name;
        $collaborator->cpf = $data->cpf;
        $collaborator->birth_date = $data->birth_date;
        $collaborator->state_id = $data->state_id;
        $collaborator->city_id = $data->city_id;
        $collaborator->role = $data->role;
        $collaborator->email = $data->email;
        $collaborator->password = md5($data->password);
        $collaborator->professional_record = $data->professional_record;

        $collaborator->save();

        return $collaborator->fresh();
    }

    public function update($idCollaborator, $request)
    {
        $collaborator = $this->getById($idCollaborator);
        return $collaborator->update($request->all());
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
