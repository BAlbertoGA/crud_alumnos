<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use SoftDeletes;

    protected $fillable = ['nombre', 'escuela_id'];

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
}

