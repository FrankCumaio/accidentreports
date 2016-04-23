<?php

namespace App\Http\Controllers;
use App\Publicacao;
use App\comentarios;
use Illuminate\Http\Request;
use App\user;
use Auth;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class publicacaoController extends Controller
{
	public function home() {
	 	//$data = DB::table('publicacao')->get();
	 	 $data = Publicacao::orderBy('idPublicacao', 'DESC')->get(); //Publicacao::all()->orderBy('idPublicacao', 'desc');
	 	 $dataUsers = User::all();
	 	 $dataComments = comentarios::all();
	 	 return view('home', 
	 	 	['data' => $data,'dataComments' => $dataComments,'dataUsers' => $dataUsers]);
	 	}

	 	public function gravarC(Request $request){

	 		$post = $request->all();
	 		$data = array(
	 			'comentario'=>$post['comentario'],
	 			'users_id'=>$post['idUser'],
	 			'publicacao_id'=>$post['idPublicacao']
	 			);
	 		$ch = DB::table('comentarios')->insert($data);
	 		if($ch>0){
	 			return redirect('/');
	 		}	
	 	}

	 	public function gravar(Request $request){
	 		if (Auth::check())
	 		{

	 			$post = $request->all();
	 			$imageName =  $request->file('fotoAcidente')->getClientOriginalName();

	 			$publicacao = Publicacao::create([
	 				'local' => $post['localAcidente'],
	 				'categoria' =>$post['categoriaAcidente'],
	 				'foto' => $imageName,
	 				'mensagem' =>$post['mensagemAcidente'],
	 				'user_id'=>Auth::user()->id
	 				]);
	 			$newImgName = $publicacao->id.'.'.$request->file('fotoAcidente')->getClientOriginalExtension();
	 			Publicacao::where('idPublicacao', $publicacao->id)->update(['foto' => $newImgName]);
	 			$request->file('fotoAcidente')->move(  base_path().'/public/imagens/',$newImgName );
	 			return redirect('/');
	 		}


	 	}





	 }