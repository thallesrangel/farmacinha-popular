<?php

namespace App\Http\Controllers\Drug;

use App\Services\DrugInService;
use App\Services\LaboratoryService;
use App\Services\MeasurementService;
use App\Services\StripeService;
use App\Services\DrugTypeService;
use App\Http\Requests\DrugInRequest;
use App\Services\PeopleService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class DrugInController extends Controller
{
    protected $drugInService;
    protected $laboratoryService;
    protected $stripeService;
    protected $measurementService;
    protected $drugTypeService;
    protected $peopleService;

    public function __construct(
        DrugInService $drugInService,
        LaboratoryService $laboratoryService, 
        StripeService $stripeService, 
        MeasurementService $measurementService,
        DrugTypeService $drugTypeService,
        PeopleService $peopleService
        )
    {
        $this->drugInService = $drugInService;
        $this->laboratoryService = $laboratoryService;
        $this->stripeService = $stripeService;
        $this->measurementService = $measurementService;
        $this->drugTypeService = $drugTypeService;
        $this->peopleService =  $peopleService;
    }

    public function index()
    {
        $data = $this->drugInService->getPaginate();
        
        return view('app.drug.drug_in.index', [ 'data' => $data ]);
    }

    public function create()
    {
        $laboratory = $this->laboratoryService->get();
        $stripe = $this->stripeService->get();
        $measurement = $this->measurementService->get();
        $drugType = $this->drugTypeService->get();
        $people = $this->peopleService->get();
        
        return view('app.drug.drug_in.create', [ 
            'laboratory' => $laboratory, 
            'stripe' => $stripe, 
            'measurement' => $measurement,
            'drugType' => $drugType,
            'people' => $people
        ]);
    }

    public function store(DrugInRequest $request)
    {
        try {
            $this->drugInService->save($request);
        } catch (\Exception $e) {
            return redirect()->route('drugin.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }

        return redirect()->route('drugin.list')->with('success', 'Registrado com sucesso.');
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
