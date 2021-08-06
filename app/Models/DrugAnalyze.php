<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DrugAnalyze extends Model
{
    const APPROVED = 'approved';
    const FAILED = 'failed';

    protected $table = 'drug_analyze';
}
