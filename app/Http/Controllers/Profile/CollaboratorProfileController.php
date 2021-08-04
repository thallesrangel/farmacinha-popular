<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Profile\Contracts\ProfileInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CollaboratorService;
use App\Services\RoleService;

class CollaboratorProfileController extends Controller implements ProfileInterface
{
    protected $collaboratorService;
    protected $roleService;

    public function __construct(CollaboratorService $collaboratorService, RoleService $roleService)
    {
        $this->collaboratorService = $collaboratorService;
        $this->roleService = $roleService;
    }

    public function profile(Request $request)
    {
        $response = $this->collaboratorService->getById($request->id);
        
        if (!$response) {
            return redirect()->route('collaborator.list')->with('not_found', 'Registro não encontrado.');
        }

        $role = $this->roleService->roleByName($response->role);

        return view('app.profile.collaborator', [ 'collaborator' => $response, 'role' => $role ]);
    }

}
