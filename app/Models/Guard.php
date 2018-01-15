<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Guard extends Model
{
    protected $fillable = ['name', 'description'];


    /**
     * 去个区域有多个用户
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * 一个区域用多个角色
     */
    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
