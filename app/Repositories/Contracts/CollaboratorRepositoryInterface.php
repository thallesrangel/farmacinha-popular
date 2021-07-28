<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;

interface CollaboratorRepositoryInterface
{
    public function get();
    public function getById($id);
    public function save(Request $id);
    public function delete($id);
}