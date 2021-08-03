<?php

namespace App\Repositories;

use App\Models\People;
use App\Repositories\Contracts\PeopleRepositoryInterface;

class PeopleRepositoryEloquent implements PeopleRepositoryInterface
{
    protected $people;

    public function __construct(People $people)
    {
        $this->people = $people;
    }

    public function get()
    {
        return $this->people->where('flag_status', "enabled")->get();
    }

    public function getPaginate()
    {   
        return $this->people->where('flag_status', "enabled")->orderBy('id', 'DESC')->paginate(8);
    }

    public function getById($id)
    {
        return $this->people->whereId($id)->first();
    }

    public function save($data)
    {
        $people = new $this->people;
        $people->id_unity = session('collaborator.id_unity');
        $people->first_name = $data->first_name;
        $people->last_name = $data->last_name;
        $people->social_name = $data->social_name;
        $people->sex = $data->sex;
        $people->birth_date = $data->birth_date;
        $people->cpf = $data->cpf;
        $people->sus = $data->sus;
        $people->state_id = $data->state_id;
        $people->city_id = $data->city_id;
        $people->district = $data->district;
        $people->address_place = $data->address_place;
        $people->complement = $data->complement;
        $people->number = $data->number;

        $people->save();

        return $people->fresh();
    }

    public function update($idPeople, $request)
    {
        $people = $this->getById($idPeople);
        return $people->update($request->all());
    }

    public function count()
    {
        return $this->people->where('flag_status', "enabled")->count();
    }

    public function disable($id)
    {
        $people = $this->people->find($id);
        $people->update(['flag_status' => "disabled" ]);
        return $people;
    }

    public function disableSelected($ids)
    {
        return $this->people->whereIn('id', explode(',', $ids))->update(['flag_status' => "disabled"]);
    }
}
