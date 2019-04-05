<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $guarded = [];
    
    protected $table = 'categorias';

    public function Produtos()
    {
        return $this->hasMany('App\Produtos', 'categoria_id');
    }
}