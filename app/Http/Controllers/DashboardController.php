<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class DashboardController extends Controller
{
    public function index()
    {
        $role = new Role();
        $data = array_values($role->roleName());

        return view('app.dashboard', [ 'role' => $data[0]]);
    }
}
