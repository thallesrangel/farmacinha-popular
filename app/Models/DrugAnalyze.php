<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrugAnalyze extends Model
{
    const APPROVED = 'approved';
    const FAILED = 'failed';

    protected $table = 'drug_analyze';

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class, 'id_collaborator');
    }

    public function drugIn()
    {
        return $this->belongsTo(DrugIn::class, 'id_drug_in');
    }
}
