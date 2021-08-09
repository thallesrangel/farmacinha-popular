<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Services\PeopleService;
use App\Services\StateService;
use Illuminate\Http\Request;
use InvalidArgumentException;

class PeopleController extends Controller
{
    protected $peopleService;
    protected $stateService;

    public function __construct(PeopleService $peopleService, StateService $stateService)
    {
        $this->peopleService = $peopleService;
        $this->stateService = $stateService;
    }

    public function index()
    {
        $people = $this->peopleService->getPaginate();
        return view('app.people.index', [ 'data' => $people ]);
    }

    public function create()
    {
        $states = $this->stateService->get();
        return view('app.people.create', [ 'states' => $states ]);
    }

    public function store(PeopleRequest $request)
    {
        try {
            $this->peopleService->save($request);
        } catch (\Exception $e) {
            return redirect()->route('people.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        return redirect()->route('people.list')->with('success', 'Registrado com sucesso.');
    }

    public function show($id)
    {
    
    }

    public function edit($id)
    {
    
    }

    public function update($id, PeopleRequest $request)
    {
    
    }

    public function disable($id)
    {

        try{
            $this->peopleService->disable($id);
        } catch(\Exception $e) {
            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }
        
        return redirect()->route('people.list')->with("success_destroy", "Registro excluído com sucesso");
    }

    public function disableSelected(Request $request)
    {
        $ids = $request->get('ids');
        
        if(empty($ids))
        {
            return redirect()->route('people.list')->with('no_selected', 'Selecione um ou mais campos.');
        }
        
        $this->peopleService->disableSelected($ids);
        return redirect()->route('people.list')->with('success', 'Excluído com sucesso.');
    }
}
