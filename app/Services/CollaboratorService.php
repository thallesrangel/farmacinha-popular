<?php

namespace App\Services;

use App\Repositories\collaboratorRepository;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;
use Exception;

class CollaboratorService
{
    protected $CollaboratorRepository;

    public function __construct(CollaboratorRepository $collaboratorRepository)
    {
        $this->collaboratorRepository = $collaboratorRepository;
    }

    public function get()
    {
        return $this->collaboratorRepository->get();
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

    public function deleteById($id)
    {
        DB::beginTransaction();

        try {
            $collaborator = $this->collaboratorRepository->delete($id);

        } catch (Exception $e) {
            DB::rollBack();

            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }

        DB::commit();

        return $collaborator;
    }
}
