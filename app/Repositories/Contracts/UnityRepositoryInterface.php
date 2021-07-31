<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;

interface UnityRepositoryInterface
{
    public function get();
    public function getPaginate();
    public function getById($id);
    public function getByStates($state);
    public function getByStatesPaginate($state);
    public function store(Request $request);
    public function update($idUnity, $request);
    public function disable($id);
}