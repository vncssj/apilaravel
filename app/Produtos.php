<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'quantidade',
        'caracteristicas',
        'preco'
    ];
    protected $table = 'produtos';
}