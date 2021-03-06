<?php

namespace App\Http\Controllers;

use App\Services\StateService;
use Exception;
use App\Services\UnityService; 
use App\Http\Requests\UnityRequest;
use App\Services\RoleService;

class UnityController extends Controller
{
    protected $unityService;
    protected $stateService;
    protected $roleService;

    public function __construct(UnityService $unityService, StateService $stateService, RoleService $roleService)
    {
        $this->middleware('roleslower');

        $this->unityService = $unityService;
        $this->stateService = $stateService;
        $this->roleService = $roleService;
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

        $role = $this->roleService->roleByName(session('collaborator.role'));
        
        $permission = in_array(session('collaborator.role'), ['gestor_geral','gestor_estadual'], true );

        return view('app.unity.index', [ 'data' => $data, 'permission'  => $permission, 'role' => $role ]);
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

    public function update($idUnity, UnityRequest $request)
    {
        return $this->unityService->update($idUnity, $request);
    }

    public function disable($idUnity)
    {
        return $this->unityService->disable($idUnity);
    }
}
