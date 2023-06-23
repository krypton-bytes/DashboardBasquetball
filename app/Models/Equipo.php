<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipo';
    //funcion para relacionar entrenador con equipo
    public function entrenador()
    {
        return $this->belongsTo(Entrenador::class);
    }
}
