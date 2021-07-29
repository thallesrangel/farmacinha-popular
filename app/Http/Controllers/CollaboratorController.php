<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CollaboratorService; 
use App\Models\Role;

class CollaboratorController extends Controller
{
    protected $collaboratorService;

    public function __construct(CollaboratorService $collaboratorService)
    {
        $this->collaboratorService = $collaboratorService;
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
        $this->collaboratorService->save($request);
    }

    public function destroy($id)
    {
        $this->collaboratorService->deleteById($id);
        return redirect()->route('collaborator.list');
    }

    public function profile($id)
    {
        $response = $this->collaboratorService->getById($id);
        
        if (!$response) {
            return redirect()->route('collaborator.list')->with('not_found', 'Registro não encontrado.');
        }

        return view('app.profile.index', [ 'collaborator' => $response ]);
    }
}
