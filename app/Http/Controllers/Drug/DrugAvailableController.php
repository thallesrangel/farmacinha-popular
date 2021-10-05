<?php

namespace App\Http\Controllers\Drug;

use App\Services\DrugAvailableService;
use Illuminate\Routing\Controller;

class DrugAvailableController extends Controller
{
    protected $drugAvailableService;

    public function __construct(DrugAvailableService $drugAvailableService)
    {   
        $this->drugAvailableService = $drugAvailableService;
    }
    
    public function index()
    {
        $drugsAvailable = $this->drugAvailableService->getPaginate();
        
        return view('app.drug.drug_available.list', [ 'data' => $drugsAvailable ]);
    }
}
