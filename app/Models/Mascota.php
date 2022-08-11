<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mascota extends Model
{
    use HasFactory;
    protected $fillable=[
        'especie',
        'rescate',
        'edad',
        'sexo',
    ];

    public function persona(): BelongsTo{
        return $this->belongsTo(Persona::class);
    }
}
