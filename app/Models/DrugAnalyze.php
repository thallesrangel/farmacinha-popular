<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class DrugAnalyze extends Model
{
    const APPROVED = 'approved';
    const FAILED = 'failed';

    protected $table = 'drug_analyze';

    public function drugIn()
    {
        return $this->belongsTo(DrugIn::class, 'id_drug_in');
    }
}
