<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $guarded = [];
    protected $table = 'produtos';
    
    public function categoria()
    {
        return $this->belongsTo('App\Categorias');
    }
}