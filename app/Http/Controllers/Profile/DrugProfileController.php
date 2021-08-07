<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Profile\Contracts\ProfileInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DrugInService;
use App\Services\DrugAnalyzeService;

class DrugProfileController extends Controller implements ProfileInterface
{
    protected $drugInService;
    protected $drugAnalyzeService;

    public function __construct(DrugInService $drugInService, DrugAnalyzeService $drugAnalyzeService)
    {
        $this->drugInService = $drugInService;
        $this->drugAnalyzeService = $drugAnalyzeService;
    }

    public function profile(Request $request)
    {
        $drugIn = $this->drugInService->getById($request->id);
        $drugAnalyze = $this->drugAnalyzeService->getByIdDrugIn($drugIn->id);
        
        if (!$drugIn) {
            return redirect()->route('drugin.list')->with('not_found', 'Registro não encontrado.');
        }

        return view('app.profile.drug', [ 'drugIn' => $drugIn, 'drugAnalyze' => $drugAnalyze ]);
    }
}
