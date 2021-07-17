<?php

namespace App\Http\Controllers;

use App\Services\UnityService; 
use App\Models\Role;

class UnityController extends Controller
{
    protected $unityService;

    public function __construct(UnityService $unityService)
    {
        $this->unityService = $unityService;
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

        $permission = in_array(session('collaborator.role'), ['gestor_geral','gestor_estradual'], true );

        return view('app.unity.index', [ 'data' => $data, 'permission'  => $permission ]);
    }

    public function selected($idUnity)
    {
        return $this->unityService->selectUnity($idUnity);
    }
}
