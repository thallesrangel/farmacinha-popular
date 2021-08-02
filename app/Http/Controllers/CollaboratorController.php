<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CollaboratorService; 
use App\Models\Role;
use App\Http\Requests\CollaboratorRequest;
use App\Services\RoleService;

class CollaboratorController extends Controller
{
    protected $collaboratorService;
    protected $roleService;

    public function __construct(CollaboratorService $collaboratorService, RoleService $roleService)
    {
        $this->collaboratorService = $collaboratorService;
        $this->roleService = $roleService;
    }

    public function index()
    {
        $collaborator = $this->collaboratorService->getPaginate();
        return view('app.collaborator.index', [ 'data' => $collaborator ]);
    }

    public function create()
    {
        $role = new Role();
        $data = $role->filterRole();

        return view('app.collaborator.create', [ 'roles' => $data]);
    }

    public function store(Request $request)
    {
        try {
            $this->collaboratorService->save($request);
        } catch (\Exception $e) {
            return redirect()->route('collaborator.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        return redirect()->route('collaborator.list')->with('success', 'Registrado com sucesso.');
    }

    public function edit($id)
    {
        $role = new Role();
        $roles = $role->filterRole();

        $data = $this->collaboratorService->getById($id);
        return view('app.collaborator.edit',  [ 'data' => $data, 'roles' => $roles]);
    }

    public function update($idCollaborator, CollaboratorRequest $request)
    {
        return $this->collaboratorService->update($idCollaborator, $request);
    }
    
    public function disable($id)
    {
        $this->collaboratorService->disable($id);
        return redirect()->route('collaborator.list');
    }

    public function disableSelected(Request $request)
    {
        $ids = $request->get('ids');

        if (empty($ids))
        {
            return redirect()->route('collaborator.list')->with('no_selected', 'Selecione um ou mais campos.');
        }
        
        $this->collaboratorService->disableSelected($ids);
        return redirect()->route('collaborator.list')->with('success', 'Excluído com sucesso.');
    }

    public function profile($id)
    {
        $response = $this->collaboratorService->getById($id);
        
        if (!$response) {
            return redirect()->route('collaborator.list')->with('not_found', 'Registro não encontrado.');
        }

        $role = $this->roleService->roleByName($response->role);

        return view('app.profile.index', [ 'collaborator' => $response, 'role' => $role ]);
    }
}
