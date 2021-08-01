<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Services\PeopleService;

class DashboardController extends Controller
{

    protected $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }
    
    public function index()
    {
        $role = new Role();
        $data = array_values($role->roleName());
        $peopleCount = $this->peopleService->count();
        return view('app.dashboard', [ 'role' => $data[0], 'peopleCount' => $peopleCount ]);
    }
}
