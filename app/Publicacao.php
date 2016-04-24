<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table ='publicacao';

    protected $fillable = [
        'local','foto','mensagem','user_id','categoria_id',
    ];

}
