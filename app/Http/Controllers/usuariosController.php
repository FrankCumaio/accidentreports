<?php

namespace App\Http\Controllers;

use App\Http\Requests\gravarUsuarioRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth ;
use App\User;
use App\Http\Requests;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class usuariosController extends Controller
{
public function Login()
{
     $user=[
        'email' =>  input::get('email'),
        'password'  =>  input::get('senha')
    ];
    
    if (Auth::attempt($user))
        {
            return redirect('/');
        }
        else
        {
        return redirect('registo');
        }
}
     public function registo(){
    	return view ('registo');
    }

       protected function gravarUsuario(gravarUsuarioRequest $request)
    {   $post = $request->all();
        
        User::create([
            'name' => $post['nome'],
            'surname' => $post['apelido'],
            'email' => $post['email'],
            'password' => bcrypt($post['csenha']),
        ]);
        return redirect('/');
    }

}
