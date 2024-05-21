<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'poblacion', 'dni', 'tfno', 'direccion', 'salario'
    ];

    public function camiones()
    {
        return $this->belongsToMany(Camion::class, 'camionero_camion');
    }

    public function paquetes(){
        return $this->hasMany(Paquete::class);
    }
}
