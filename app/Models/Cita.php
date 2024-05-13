<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table='Citas';

    protected $primaryKey='idcita';

    public $timestamps=false;

    protected $fillable=[
        "nom_mascota",
        "nom_propietario",
        "diagnostico",
        "fecha_registro"
    ];
}
