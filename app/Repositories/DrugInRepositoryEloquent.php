<?php

namespace App\Repositories;

use App\Models\DrugIn;
use App\Repositories\Contracts\DrugInRepositoryInterface;

class DrugInRepositoryEloquent implements DrugInRepositoryInterface
{
    protected $drugIn;

    public function __construct(DrugIn $drugIn)
    {
        $this->drugIn = $drugIn;
    }

    public function get()
    {
        return $this->drugIn->get();
    }

    public function getById($id)
    {
        return $this->drugIn->whereId($id)
                            ->with('stripe')
                            ->with('drugType')
                            ->with('people')
                            ->with('collaborator')
                            ->with('laboratory')
                            ->with('measurement')
                            ->orderBy('id', 'DESC')
                            ->first();
    }

    public function getPaginate()
    {   
        return $this->drugIn->with('people')
                            ->with('laboratory')
                            ->with('measurement')
                            ->orderBy('id', 'DESC')
                            ->paginate(8);
    }

    public function save($data)
    {
        $drugIn = new $this->drugIn;
        $drugIn->id_unity = session('collaborator.id_unity');
        $drugIn->id_collaborator = session('collaborator.id');
        $drugIn->id_people_donator = $data->id_people_donator;
        $drugIn->name = $data->name;
        $drugIn->id_drug_type = $data->id_drug_type;
        $drugIn->id_laboratory = $data->id_laboratory;
        $drugIn->id_stripe = $data->id_stripe;
        $drugIn->expiration_date = $data->expiration_date;
        $drugIn->id_measurement = $data->id_measurement;
        $drugIn->amount = $data->amount;

        $drugIn->save();

        return $drugIn->fresh();
    }
}
