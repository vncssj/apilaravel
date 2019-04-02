<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'login',
        'senha',
        'email',
        'role'
    ];
    protected $table = 'users';
}