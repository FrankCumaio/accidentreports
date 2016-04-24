<?php

namespace App\Http\Controllers;
use App\Publicacao;
use App\comentarios;
use App\Http\Requests\gravarPublicacaoRequest;
use App\categorias;
use Illuminate\Http\Request;
use App\user;
use Auth;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class publicacaoController extends Controller
{
	public function home() {
	 	
	 	 $data = Publicacao::orderBy('idPublicacao', 'DESC')->get(); //Publicacao::all()->orderBy('idPublicacao', 'desc');
	 	 $dataUsers = User::all();
	 	 $dataComments = comentarios::all();
	 	 $dataCategorias = categorias::all();
	 	 $listaCategorias = categorias::orderBy('categoria', 'asc')->lists('categoria','idCategoria');
	 	 return view('home',[ 
	 	 	'data' => $data,
	 	 	'dataComments' => $dataComments,
	 	 	'dataUsers' => $dataUsers,
	 	 	'dataCategorias'=>$dataCategorias,
	 	 	'listaCategorias'=>$listaCategorias
	 	 	]);
	 	}

	 	public function gravarC(Request $request){
	 		if (Auth::check())
	 		{

	 		$post = $request->all();
	 		comentarios::create([
	 			'comentario'=>$post['comentario'],
	 			'user_id'=>Auth::user()->id,
	 			'publicacao_id'=>$post['idPublicacao']
	 			]);
	 		
	 			return redirect('/');
	 				
	 	    }
	 	}

	 	public function gravar(gravarPublicacaoRequest $request){
	 		if (Auth::check())
	 		{

	 			$post = $request->all();
	 			$imageName =  $request->file('fotoAcidente')->getClientOriginalName();

	 			$publicacao = Publicacao::create([
	 				'local' => $post['localAcidente'],
	 				'foto' => $imageName,
	 				'mensagem' =>$post['mensagemAcidente'],
	 				'user_id'=>Auth::user()->id,
	 				'categoria_id' =>$post['categoriaAcidente']
	 				]);
	 			$newImgName = $publicacao->id.'.'.$request->file('fotoAcidente')->getClientOriginalExtension();
	 			Publicacao::where('idPublicacao', $publicacao->id)->update(['foto' => $newImgName]);
	 			$request->file('fotoAcidente')->move(  base_path().'/public/imagens/',$newImgName );
	 			return redirect('/');
	 		}


	 	}





	 }