<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CollaboratorService; 

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
        return view('app.collaborator.create');
    }

    public function store(Request $request)
    {

    }
}
