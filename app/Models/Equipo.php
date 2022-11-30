<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipo extends Model
{
    use SoftDeletes;
    use HasFactory;

    function cliente(){
        return $this->belongsTo(Cliente::class)->withTrashed();
    }
    function procedimiento(){
        return $this->belongsTo(Procedimiento::class);
    }
}
