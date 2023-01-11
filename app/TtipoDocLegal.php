<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TtipoDocLegal extends Model
{
    //
    protected $fillable=[
        'codigo', 'descripcion', 'short_name'. 'prioridad', 'estado'
    ];
}
