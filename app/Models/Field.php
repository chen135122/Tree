<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public $timestamps = false;


    public function fieldTranslates()
    {
        return $this->hasMany(FieldTranslate::class);
    }
}
