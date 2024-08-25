<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table= 'estudiantes';//nombre de la tabla tal cual como en la base de datos

    //Definir los campos que va tener la tabla, tal cual como en a bd
    protected $fillable =[
        'nombre',
        'apellido',
        'documento',
        'telefono',
        'curso',
        'activo',
    ];
}
