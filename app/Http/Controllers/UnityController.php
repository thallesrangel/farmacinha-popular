<?php

namespace App\Http\Controllers;

use App\Services\UnityService; 

class UnityController extends Controller
{
    protected $unityService;

    public function __construct(UnityService $unityService)
    {
        $this->unityService = $unityService;
    }

    public function index()
    {
        $data = $this->unityService->get();
        return view('app.unity.index', [ 'data' => $data ]);
    }
}
