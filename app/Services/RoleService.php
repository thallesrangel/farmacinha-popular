<?php

namespace App\Services;

use App\Repositories\Contracts\RoleRepositoryInterface;

class RoleService
{
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function get()
    {
        return $this->peopleRepository->get();
    }

    public function roleName()
    {
        $role = $this->roleRepository->roleName();
        return array_values($role)[0];
    }

    public function roleByName($name)
    {
        $role = $this->roleRepository->roleByName($name);
        return array_values($role)[0];
    }
}
