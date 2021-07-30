<?php

namespace App\Http\Controllers;

use App\Services\StateService;
use Illuminate\Http\Request;
use Exception;
use App\Services\UnityService; 
use App\Http\Requests\UnityRequest;

class UnityController extends Controller
{
    protected $unityService;
    protected $stateService;

    public function __construct(UnityService $unityService, StateService $stateService)
    {
        $this->middleware('roleslower');

        $this->unityService = $unityService;
        $this->stateService = $stateService;
    }

    public function index()
    {

        switch (session('collaborator.role')) {
            case 'gestor_geral':
                $data = $this->unityService->getPaginate();
                break;
            case 'gestor_estadual':
                $data = $this->unityService->getByStatesPaginate();
                break;
        }

        $permission = in_array(session('collaborator.role'), ['gestor_geral','gestor_estadual'], true );

        return view('app.unity.index', [ 'data' => $data, 'permission'  => $permission ]);
    }

    public function create()
    {
        $states = $this->stateService->get();
        return view('app.unity.create',  [ 'states' => $states ]);
    }

    public function store(UnityRequest $request)
    {
        try {
            $this->unityService->store($request);
        } catch (Exception $e) {
            return redirect()->route('unity.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }

        return redirect()->route('unity.list')->with('success', 'Registrado com sucesso.');
    }

    public function edit($id)
    {
        $states = $this->stateService->get();
        $data = $this->unityService->getById($id);
        return view('app.unity.edit',  [ 'data' => $data, 'states' => $states ]);
    }

    public function selected($idUnity)
    {
        return $this->unityService->selectUnity($idUnity);
    }

    public function update($idUnity, Request $request)
    {
        //$unity = $this->unityService->getById($idUnity);

        $this->validate($request, [
            'corporate_name' => 'required',
            'states' => 'required',
            'cnes' => 'required'
        ]);

        return $this->unityService->update($idUnity, $request);
    }

    public function disabled($idUnity)
    {
        return $this->unityService->disabled($idUnity);
    }
}
