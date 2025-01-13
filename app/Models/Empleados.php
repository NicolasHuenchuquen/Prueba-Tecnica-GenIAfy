<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    
    protected $table = 'empleados';

    // CAMPOS QUE PODRAN SER ALTERADOS
    protected $fillable = [
        'nombre',
        'rut',
        'email'
    ];
}
