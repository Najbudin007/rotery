<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function role() {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'roles_permissions');
    }
}
