<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    // Agrega los campos permitidos para la asignación masiva
    protected $fillable = [
        'nombre',       
        'telefono',     
        'ciudad',
        'correo',
        'mensaje',
    ];
}
