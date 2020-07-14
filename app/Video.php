<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    // Relacion de muchos a uno
    public function categoria() {
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    // Relacion de muchos a uno
    public function producto() {
        return $this->belongsTo('App\Producto', 'producto_id');
    }

}
