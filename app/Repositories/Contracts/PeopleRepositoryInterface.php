<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;

interface PeopleRepositoryInterface
{
    public function get();
    public function getById($id);
    public function save(Request $id);
    public function update($id, Request $request);
    public function disable($id);
    public function disableSelected($ids);
}