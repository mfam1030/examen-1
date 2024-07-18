<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arbol extends Model
{
    use HasFactory;

    protected $table = 'arboles'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'descripcion', 'latitud', 'longitud', 'señalizado', 'año_plantado',
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie');
    }
}
