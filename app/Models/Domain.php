<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class Domain extends Model
{
    protected $fillable = ['name', 'description'];


    /**
     * 区域有多个用户
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
