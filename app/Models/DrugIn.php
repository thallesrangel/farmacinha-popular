<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrugIn extends Model
{
    protected $table = 'drug_in';

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class, 'id_laboratory');
    }

    public function drugType()
    {
        return $this->belongsTo(DrugType::class, 'id_drug_type');
    }

    public function stripe()
    {
        return $this->belongsTo(Stripe::class, 'id_stripe');
    }

    public function people()
    {
        return $this->belongsTo(People::class, 'id_people_donator');
    }

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class, 'id_collaborator');
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class, 'id_measurement');
    }
}
