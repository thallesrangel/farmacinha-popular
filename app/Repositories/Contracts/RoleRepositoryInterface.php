<?php

namespace App\Repositories\Contracts;

interface RoleRepositoryInterface
{
    public function get();
    public function roleName();
    public function roleByName($role);
}