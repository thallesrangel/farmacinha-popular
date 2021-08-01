<?php

namespace App\Services;

use App\Http\Requests\PeopleRequest;
use App\Repositories\Contracts\PeopleRepositoryInterface;
use InvalidArgumentException;
use Illuminate\Support\Facades\DB;

class PeopleService
{
    protected $PeopleRepository;

    public function __construct(PeopleRepositoryInterface $peopleRepository)
    {
        $this->peopleRepository = $peopleRepository;
    }

    public function get()
    {
        return $this->peopleRepository->get();
    }

    public function getPaginate()
    {
        return $this->peopleRepository->getPaginate();
    }

    public function getById($id)
    {
        return $this->peopleRepository->getById($id);
    }

    public function save($data)
    {
        return $this->peopleRepository->save($data);
    }

    public function update($id, PeopleRequest $request)
    {
        try {
            $this->peopleRepository->update($id, $request);
        } catch(\Exception $e) {
            return redirect()->route('people.list')->with("error", "Não foi possível alterar o registro");
        }

        return redirect()->route('people.list')->with("success", "Alterado com sucesso");
    }

    public function count()
    {
        return $this->peopleRepository->count();
    }

    public function disable($id)
    {
        try {
            $this->peopleRepository->disable($id);
        } catch(\Exception $e) {
            return redirect()->route('people.list')->with("error", "Não foi possível excluir o registro");
        }

        return redirect()->route('people.list')->with("success", "Excluído com sucesso");
    }

    public function disableSelected(array $ids)
    {
        $all = implode(',', $ids);
        return $this->peopleRepository->disableSelected($all);
    }
}
