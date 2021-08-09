<?php

namespace App\Repositories;

use App\Models\drugAnalyze;
use App\Models\DrugIn;
use App\Repositories\Contracts\DrugAnalyzeRepositoryInterface;
use Illuminate\Support\Facades\DB;

class DrugAnalyzeRepositoryEloquent implements DrugAnalyzeRepositoryInterface
{
    protected $drugAnalyze;
    protected $drugIn;

    public function __construct(DrugAnalyze $drugAnalyze, DrugIn $drugIn)
    {
        $this->drugAnalyze = $drugAnalyze;
        $this->drugIn = $drugIn; 
    }

    public function get()
    {
        return $this->drugAnalyze->get();
    }

    public function getById($id)
    {
        return $this->drugAnalyze->whereId($id)
                                ->with('drugIn')
                                ->with('collaborator')
                                ->orderBy('id', 'DESC')
                                ->first();
    }

    public function getByIdDrugIn($id)
    {
        return $this->drugAnalyze->where('id_drug_in', $id)
                                ->with('drugIn')
                                ->with('collaborator')
                                ->orderBy('id', 'DESC')
                                ->first();
    }

    public function getPaginate()
    {   
        return $this->drugAnalyze->orderBy('id', 'DESC')
                            ->with('drugIn')
                            ->with('collaborator')
                            ->paginate(8);
    }

    public function store($data)
    {
        DB::beginTransaction();

        try {
            $drugAnalyze = new $this->drugAnalyze;
            $drugAnalyze->id_drug_in = (int) $data->id_drug_in; 
            $drugAnalyze->id_unity = session('collaborator.id_unity');
            $drugAnalyze->id_collaborator = session('collaborator.id');
            $drugAnalyze->confirm_laboratory = $data->confirm_laboratory;
            $drugAnalyze->confirm_originality = $data->confirm_originality;
            $drugAnalyze->conservation = $data->conservation;
            $drugAnalyze->expiration_date = $data->expiration_date;
            $drugAnalyze->analyze_result = $data->analyze_result;
            $drugAnalyze->save();
            
            $this->drugIn->where('id', $data->id_drug_in)->update(['step' => $this->drugIn::STEP_AVAILABLE]);

            DB::commit();
            
        } catch (\Exception $e) {
            DB::rollback();
        }
        
        return $drugAnalyze->fresh();
    }
}
