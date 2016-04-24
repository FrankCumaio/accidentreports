<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    protected $table ='publicacao';

    protected $fillable = [
<<<<<<< HEAD
        'local','foto','mensagem','user_id','categoria_id',
=======
        'local', 'categoria', 'foto','mensagem','user_id',
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
    ];

}
