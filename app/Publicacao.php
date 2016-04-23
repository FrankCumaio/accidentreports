<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table ='publicacao';

    protected $fillable = [
        'local', 'categoria', 'foto','mensagem','user_id',
    ];

}
