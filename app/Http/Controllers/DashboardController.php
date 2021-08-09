<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Services\DrugInService;
use App\Services\PeopleService;
use App\Services\RoleService;

class DashboardController extends Controller
{
    protected $drugInService;
    protected $peopleService;
    protected $roleService;

    public function __construct(
        DrugInService $drugInService, 
        PeopleService $peopleService, 
        RoleService $roleService)
    {
        $this->drugInService = $drugInService;
        $this->peopleService = $peopleService;
        $this->roleService = $roleService;
    }
    
    public function index()
    {
        $role = $this->roleService->roleName();
        $drugInCount = $this->drugInService->count();
        $peopleCount = $this->peopleService->count();
        
        return view('app.dashboard', [ 'role' => $role, 'peopleCount' => $peopleCount, 'drugInCount' => $drugInCount ]);
    }
}
