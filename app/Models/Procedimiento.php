<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
    function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
    function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
