<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefones extends Model
{
    protected $fillable = [
        'id',
        'ddd',
        'numero',
        'user_id',
    ];
    protected $table = 'telefones';
}