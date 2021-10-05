<?php

namespace App\Repositories;

use App\Models\drugAnalyze;
use App\Repositories\Contracts\DrugAvailableRepositoryInterface;

class DrugAvailableRepositoryEloquent implements DrugAvailableRepositoryInterface
{
    protected $drugAnalyze;
    
    public function __construct(DrugAnalyze $drugAnalyze)
    {
        $this->drugAnalyze = $drugAnalyze;
    }

    public function get()
    {
        return $this->drugAnalyze->where('analyze_result', 'approved')->with('drugIn')->get();
    }

    public function getPaginate()
    {   
        return $this->drugAnalyze->where('analyze_result', 'approved')
                                ->with('drugIn')
                                ->orderBy('id', 'DESC')
                                ->paginate(8);
    }
}
