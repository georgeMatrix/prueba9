<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'apellido', 'id_depa'];

    public function departamento(){
        return $this->belongsTo(Departamento::class, 'id_depa');
    }
}
