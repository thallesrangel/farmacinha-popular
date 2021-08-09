<?php

namespace App\Services;

use App\Http\Requests\CollaboratorRequest;
use App\Repositories\Contracts\CollaboratorRepositoryInterface;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;

class CollaboratorService
{
    protected $CollaboratorRepository;

    public function __construct(CollaboratorRepositoryInterface $collaboratorRepository)
    {
        $this->collaboratorRepository = $collaboratorRepository;
    }

    public function get()
    {
        return $this->collaboratorRepository->get();
    }

    public function getPaginate()
    {
        return $this->collaboratorRepository->getPaginate();
    }

    public function getById($id)
    {
        return $this->collaboratorRepository->getById($id);
    }

    public function save($data)
    {
        $response = $this->collaboratorRepository->save($data);

        return $response;
    }

    public function update($idCollaborator, CollaboratorRequest $request)
    {
        try {
            $this->collaboratorRepository->update($idCollaborator, $request);
        } catch(\Exception $e) {
            return redirect()->route('collaborator.list')->with("error", "Não foi possível alterar o registro");
        }

        return redirect()->route('collaborator.list')->with("success", "Alterado com sucesso");
    }

    public function disable($id)
    {
        try{
            $this->collaboratorRepository->disable($id);
        } catch(\Exception $e) {
            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }
        
        return redirect()->route('unity.list')->with("success_destroy", "Registro excluído com sucesso");
    }

    public function disableSelected(array $ids)
    {
        $all = implode(',', $ids);
        return $this->collaboratorRepository->disableSelected($all);
    }
}
