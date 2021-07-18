<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Services\UnityService; 

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

        $permission = in_array(session('collaborator.role'), ['gestor_geral','gestor_estadual'], true );

        return view('app.unity.index', [ 'data' => $data, 'permission'  => $permission ]);
    }

    public function create()
    {
        return view('app.unity.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'corporate_name',
            'cnes',
            'states'
        ]);

        try {
            $this->unityService->store($data);
        } catch (Exception $e) {
            return redirect()->route('unity.list')->with('error', 'Ocorreu um erro.');;
        }

        return redirect()->route('unity.list')->with('success', 'Registrado com sucesso.');
    }

    public function selected($idUnity)
    {
        return $this->unityService->selectUnity($idUnity);
    }
}
