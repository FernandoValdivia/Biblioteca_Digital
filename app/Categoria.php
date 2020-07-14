<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';

    // Relacion de uno a muchos
    public function videos() {
        return $this->hasMany('App\Video');
    }
    //
    protected $fillable=[
     
        'nombre',
        'descripcion'
    ];
}
