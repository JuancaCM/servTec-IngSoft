<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Procedimiento extends Model
{
    use SoftDeletes;
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
