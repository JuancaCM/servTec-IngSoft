<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    use HasFactory;
    function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    function procedimiento(){
        return $this->belongsTo(Procedimiento::class);
    }
}
