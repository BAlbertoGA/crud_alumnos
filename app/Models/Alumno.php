<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{

    protected $fillable = ['nombre', 'escuela_id'];

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }

    /*
    public function scopeSortByAlumno($query, $sort, $direction)
    {
        return match($sort) {
            'id' => $query->orderBy('id', $direction),
            'nombre' => $query->orderBy('nombre', $direction),
            'primerapellido' => $query->orderBy('primerapellido', $direction),
            'segundoapellido' => $query->orderBy('segundoapellido', $direction),
            'escuela' => $query->join('escuelas', 'alumnos.escuela_id', '=', 'escuelas.id')
                               ->orderBy('escuelas.nombre', $direction)
                               ->select('alumnos.*'),
            default => $query
        };
    }

    public function scopeSortByEscuela($query, $direction)
    {
        return $query->join('escuelas', 'alumnos.escuela_id', '=', 'escuelas.id')
                     ->orderBy('escuelas.nombre', $direction)
                     ->select('alumnos.*');
    }
*/
}

