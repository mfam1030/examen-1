<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion'];

    public function arboles()
    {
        return $this->hasMany(Arbol::class, 'id_especie');
    }
}
