<?php

namespace App\Services;

use App\Http\Requests\UnityRequest;
use App\Repositories\Contracts\UnityRepositoryInterface;
use Exception;

class UnityService
{
    protected $unityRepository;

    public function __construct(UnityRepositoryInterface $unityRepository)
    {
        $this->unityRepository = $unityRepository;
    }

    public function get()
    {
        return $this->unityRepository->get();
    }

    public function getPaginate()
    {
        return $this->unityRepository->getPaginate();
    }

    public function getByStates()
    {
        return $this->unityRepository->getByStates(session('collaborator.state_id'));
    }

    public function getByStatesPaginate()
    {
        return $this->unityRepository->getByStatesPaginate(session('collaborator.state_id'));
    }
    
    public function getById($id)
    {
        $info = $id ? $id : session('collaborator.id_unity');
        return $this->unityRepository->getById($info);
    }
    
    public function getByLocation($data)
    {
        return $this->unityRepository->getByLocation($data);
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

    public function update($idUnity, UnityRequest $request)
    {
        try {
            $this->unityRepository->update($idUnity, $request);
        } catch(Exception $e) {
            return redirect()->route('unity.list')->with("error", "Não foi possível alterar o registro");
        }

        return redirect()->route('unity.list')->with("success", "Alterado com sucesso");
    }

    public function disable($idUnity)
    {
        try{
            $this->unityRepository->disable($idUnity);
        } catch(\Exception $e) {
            dd("error");
        }

        return redirect()->route('unity.list')->with("success_destroy", "Registro excluído com sucesso");
    }
}
