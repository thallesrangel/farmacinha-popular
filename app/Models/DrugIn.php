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

    public function people()
    {
        return $this->belongsTo(People::class, 'id_people_donator');
    }

    public function measurement()
    {
        return $this->belongsTo(Measurement::class, 'id_measurement');
    }
}
