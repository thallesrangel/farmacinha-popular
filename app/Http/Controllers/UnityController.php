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
                $data = $this->unityService->get();
                break;
            case 'gestor_estadual':
                $data = $this->unityService->getByStates();
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

    public function selected($idUnity)
    {
        return $this->unityService->selectUnity($idUnity);
    }

    public function update(Request $request)
    {
    }

    public function destroy($id)
    {
    }
}
