<?php

namespace App\Services;

use App\Repositories\UnityRepository;

class UnityService
{
    protected $unityRepository;

    public function __construct(UnityRepository $unityRepository)
    {
        $this->unityRepository = $unityRepository;
    }

    public function get()
    {
        return $this->unityRepository->get();
    }

    public function getByStates()
    {
        return $this->unityRepository->getByStates(session('collaborator.states'));
    }

    public function getById()
    {
        return $this->unityRepository->getById(session('collaborator.id_unity'));
    }

    public function store($data)
    {
        return $this->unityRepository->store($data);
    }
    
    public function selectUnity($idUnity)
    {   
        $data = $this->unityRepository->getById($idUnity);
        session('collaborator')->id_unity = $data->id;
        session('collaborator')->corporate_name = $data->corporate_name;
        session('collaborator')->cnes = $data->cnes;

        return redirect()->route('dashboard');
    }

}
