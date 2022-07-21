<?php

namespace App\Models\libros;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;
    protected $fillable = [
        'autor',
        'titulo',
        'edicion',
        'datosDePublicación',
        'tipoDeContenido',
        'restricciones',
        'materia',
        'proveedor',
        'imagen',
    ];
}
