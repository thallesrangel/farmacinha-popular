<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CollaboratorService; 
use App\Models\Role;

class CollaboratorController extends Controller
{
    protected $collaboratorService;

    public function __construct(CollaboratorService $collaboratorService)
    {
        $this->collaboratorService = $collaboratorService;
    }

    public function index()
    {
        $collaborator = $this->collaboratorService->getPaginate();
        return view('app.collaborator.index', [ 'data' => $collaborator ]);
    }

    public function create()
    {
        $role = new Role();
        $data = $role->filterRole();

        return view('app.collaborator.create', [ 'roles' => $data]);
    }

    public function store(Request $request)
    {

        try {
            $this->collaboratorService->save($request);
        } catch (\Exception $e) {
            return redirect()->route('collaborator.list')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        return redirect()->route('collaborator.list')->with('success', 'Registrado com sucesso.');
    }

    public function destroy($id)
    {
        $this->collaboratorService->deleteById($id);
        return redirect()->route('collaborator.list');
    }

    public function disableSelected(Request $request)
    {
        $ids = $request->get('ids');

        
        if(empty($ids))
        {
            return redirect()->route('collaborator.list')->with('no_selected', 'Selecione um ou mais campos.');
        }
        /*
        $all = implode(',', $ids);
        Raca::whereIn('id_raca', explode(',', $all))->update(['flag_excluido' => 1]);

        # Mensagem
        session()->flash('alert', 'excluidos');
        
        return redirect()->route('raca');
        */
    }

    public function profile($id)
    {
        $response = $this->collaboratorService->getById($id);
        
        if (!$response) {
            return redirect()->route('collaborator.list')->with('not_found', 'Registro não encontrado.');
        }

        return view('app.profile.index', [ 'collaborator' => $response ]);
    }
}
