<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Services\PeopleService;
use App\Services\RoleService;

class DashboardController extends Controller
{
    protected $peopleService;
    protected $roleService;

    public function __construct(PeopleService $peopleService, RoleService $roleService)
    {
        $this->peopleService = $peopleService;
        $this->roleService = $roleService;
    }
    
    public function index()
    {

        $role = $this->roleService->roleName();
        $peopleCount = $this->peopleService->count();
        return view('app.dashboard', [ 'role' => $role, 'peopleCount' => $peopleCount ]);
    }
}
