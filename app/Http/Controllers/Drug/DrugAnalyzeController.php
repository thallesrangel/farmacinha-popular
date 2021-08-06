<?php

namespace App\Http\Controllers\Drug;

use App\Services\DrugAnalyzeService;
use App\Services\DrugInService;
use App\Http\Requests\DrugAnalyzeRequest;
use Illuminate\Routing\Controller;

class DrugAnalyzeController extends Controller
{
    protected $durgInService;
    protected $drugAnalyzeService;

    public function __construct(
        DrugAnalyzeService $drugAnalyzeService,
        DrugInService $durgInService
    )
    {   
        $this->drugAnalyzeService = $drugAnalyzeService;
        $this->durgInService = $durgInService;
    }

    public function get()
    {
            
    }
    
    public function create($idDrugIn)
    {
        $drugIn = $this->durgInService->getById($idDrugIn);
        
        return view('app.drug.drug_analyze.create', [ 'data' => $drugIn ]);
    }

    public function store(DrugAnalyzeRequest $request)
    {
        $this->drugAnalyzeService->store($request);
    }
}
