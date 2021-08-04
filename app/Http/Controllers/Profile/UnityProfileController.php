<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Profile\Contracts\ProfileInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UnityService;

class UnityProfileController extends Controller implements ProfileInterface
{
    protected $unityService;

    public function __construct(UnityService $unityService)
    {
        $this->unityService = $unityService;
    }

    public function profile(Request $request)
    {
        $response = $this->unityService->getById($request->id);
        
        if (!$response) {
            return redirect()->route('unity.list')->with('not_found', 'Registro não encontrado.');
        }

        return view('app.profile.unity', [ 'unity' => $response ]);
    }

}
