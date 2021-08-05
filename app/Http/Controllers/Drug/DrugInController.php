<?php

namespace App\Http\Controllers\Drug;

use App\Services\LaboratoryService;
use App\Services\MeasurementService;
use App\Services\StripeService;
use App\Services\DrugTypeService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DrugInController extends Controller
{
    protected $laboratoryService;
    protected $stripeService;
    protected $measurementService;
    protected $drugTypeService;

    public function __construct(
        LaboratoryService $laboratoryService, 
        StripeService $stripeService, 
        MeasurementService $measurementService,
        DrugTypeService $drugTypeService
        )
    {
        $this->laboratoryService = $laboratoryService;
        $this->stripeService = $stripeService;
        $this->measurementService = $measurementService;
        $this->drugTypeService = $drugTypeService;
    }

    public function index()
    {
    
    }

    public function create()
    {
        $laboratory = $this->laboratoryService->get();
        $stripe = $this->stripeService->get();
        $measurement = $this->measurementService->get();
        $drugType = $this->drugTypeService->get();
        
        return view('app.drug.drug_in.create', [ 
            'laboratory' => $laboratory, 
            'stripe' => $stripe, 
            'measurement' => $measurement,
            'drugType' => $drugType 
        ]);
    }

    public function store(Request $request)
    {
    
    }

    public function edit(Request $request)
    {
    
    }

    public function update(Request $request)
    {
    
    }

    public function disabled($id)
    {

    }
}
