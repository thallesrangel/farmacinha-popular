<?php

namespace App\Http\Controllers\Drug;

use App\Services\DrugInService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DrugAnalyzeController extends Controller
{
    protected $durgInService;

    public function __construct(DrugInService $durgInService)
    {
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

    public function store(Request $request)
    {
    
    }
}
