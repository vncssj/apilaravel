<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'categorias';

    public function Produtos()
    {
        return $this->hasMany(Produtos::class, 'categoria_id');
    }
}