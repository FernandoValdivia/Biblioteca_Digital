<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable=[
        'id_producto',
        'nombre',
        'editorial',
        'fechaPublicacion',
        'edicion',
        'genero',
        'descripcion',
        'autor',
        'precio',
        'id_categoria',
        
    ];
}
