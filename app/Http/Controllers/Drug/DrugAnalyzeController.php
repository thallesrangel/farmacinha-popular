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
    
    public function create($idDrugIn)
    {
        $drugIn = $this->durgInService->getById($idDrugIn);
       
        return view('app.drug.drug_analyze.create', [ 'data' => $drugIn ]);
    }

    public function store(DrugAnalyzeRequest $request)
    {
        try {
            $this->drugAnalyzeService->store($request);
        } catch (\Exception $e) {
            return redirect()->route('druganalyze.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        return redirect()->route('druganalyze.list')->with('success', 'Registrado com sucesso.');
    }
}
