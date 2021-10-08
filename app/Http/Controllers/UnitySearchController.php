<?php

namespace App\Http\Controllers;

use App\Http\Requests\UnitySearchRequest;
use App\Services\StateService;
use App\Services\UnityService;

class UnitySearchController extends Controller
{
    protected $stateService;
    protected $unityService;

    public function __construct(StateService $stateService, UnityService $unityService)
    {
        $this->stateService = $stateService;
        $this->unityService = $unityService;
    }

    public function index()
    {
        $states = $this->stateService->get();
        $unity = [];
        
        return view('public.search', [ 'states' => $states, 'unity' => $unity ]);
    }

    public function show(UnitySearchRequest $request)
    {
        $states = $this->stateService->get();
        $unity = $this->unityService->getByLocation($request);
        
        return view('public.search', [ 'states' => $states, 'unity' => $unity ]);
    }
}
