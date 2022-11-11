<?php

namespace App\Repository\RolePermission;

use App\Models\Role;
use App\Repository\BaseRepository;

class RoleRepository extends BaseRepository
{
    public function __construct(Role $role)
    {
        $this->model = $role;
    }
}
