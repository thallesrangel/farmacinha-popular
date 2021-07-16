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
        $data = $this->collaboratorService->get();
        return view('app.collaborator.index', [ 'data' => $data ]);
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
}
