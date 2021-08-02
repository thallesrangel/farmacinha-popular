<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\Contracts\RoleRepositoryInterface;

class RoleRepositoryEloquent implements RoleRepositoryInterface
{
    protected $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function get()
    {
        return $this->role->get();
    }

    public function roleName()
    {
        return $this->role->roleName();
    }

    public function roleByName($name)
    {
        return $this->role->roleByName($name);
    }
}
