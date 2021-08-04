<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Profile\Contracts\ProfileInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PeopleService;

class PeopleProfileController extends Controller implements ProfileInterface
{
    protected $peopleService;

    public function __construct(PeopleService $peopleService)
    {
        $this->peopleService = $peopleService;
    }

    public function profile(Request $request)
    {
        $response = $this->peopleService->getById($request->id);
        
        if (!$response) {
            return redirect()->route('people.profile')->with('not_found', 'Registro não encontrado.');
        }

        return view('app.profile.people', [ 'people' => $response ]);
    }

}
