<?php

namespace App\Repository\RolePermission;

use App\Models\Permission;
use App\Repository\BaseRepository;

class PermissionRepository extends BaseRepository
{
    public function __construct(Permission $permission)
    {
        $this->model = $permission;
    }
}
