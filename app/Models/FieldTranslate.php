<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldTranslate extends Model
{
    protected $table = 'field_translate';

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
