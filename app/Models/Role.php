<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    protected $fillable = [
        
        'name',
    ];
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions', 'role_id', 'permission_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles', 'user_id', 'role_id');
    }
}
