<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Persona extends Model
{
    use HasFactory;

    protected $fillable=[
        'nombre',
        'apellido',
        'telefono',
        'cedula',
        'sexo',
    ];
    
    public function mascota(): HasOne{
       return $this->hasOne(Mascota::class); 
    }

    public function solicitudes(): HasMany{
        return $this->hasMany(Solicitud::class);
    }

}
