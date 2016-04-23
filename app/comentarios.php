<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    protected $table ='comentarios';

    protected $fillable = [
        'comentario', 'user_id', 'publicacao_id',
    ];
}
