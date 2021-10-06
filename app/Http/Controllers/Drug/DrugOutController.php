<?php

namespace App\Http\Controllers\Drug;

use App\Http\Requests\DrugOutRequest;
use App\Services\DrugInService;
use App\Services\DrugOutService;
use App\Services\PeopleService;
use Illuminate\Routing\Controller;

class DrugOutController extends Controller
{
    protected $drugInService;
    protected $drugOutService;
    protected $peopleService;

    public function __construct(DrugInService $drugInService, DrugOutService $drugOutService, PeopleService $peopleService)
    {
        $this->drugInService = $drugInService;
        $this->drugOutService = $drugOutService;
        $this->peopleService = $peopleService;
    }

    public function create($id)
    {
        $drug = $this->drugInService->getById($id);
        $people = $this->peopleService->get();

        return view('app.drug.drug_out.create', [ 'drug' => $drug, 'people' => $people ]);
    }

    public function store(DrugOutRequest $request)
    {
        try {
            $this->drugOutService->store($request);
        } catch (\Exception $e) {
            return redirect()->route('drugavailable.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }

        return redirect()->route('drugavailable.list')->with('success', 'Registrado com sucesso.');
    }
}
