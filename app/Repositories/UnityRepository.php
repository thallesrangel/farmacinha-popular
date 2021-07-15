<?php

namespace App\Repositories;

use App\Models\Unity;

class UnityRepository
{
    protected $unity;

    public function __construct(Unity $unity)
    {
        $this->unity = $unity;
    }

    public function get()
    {
        return $this->unity->get();
    }
}
