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

<<<<<<< HEAD
       protected function gravarUsuario(gravarUsuarioRequest $request)
    {   $post = $request->all();
        
        User::create([
            'name' => $post['nome'],
            'surname' => $post['apelido'],
            'email' => $post['email'],
            'password' => bcrypt($post['csenha']),
=======
       protected function gravarUsuario()
    {
         $data = array(
            'name'     => Input::get('nome'),
            'surname'     => Input::get('apelido'),
        'email'     => Input::get('email'),
        'password'  => Input::get('csenha')
    );
         // $ch = DB::table('users')->insert($data);
         //    if($ch>0){
         //        return redirect('/');
         //    }   
        User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
        ]);
        return redirect('/');
    }

<<<<<<< HEAD
=======
    	public function gravarUsuarios(gravarUsuarioRequest $request){
		$post = $request->all();
			$data = array(
				'name'=>$post['nome'],
				'surname'=>$post['apelido'],
				'email'=>$post['email'],
				'password'=>$post['csenha']
				);
			$ch = DB::table('users')->insert($data);
			if($ch>0){
				return redirect('/');
			}	
		}
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
}
