<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use DB;

class publicacaoController extends Controller
{
	 public function home() {
	 	$data = DB::table('publicacao')->get();
    	return view ('conteudo')->with('data',$data);
    }
	public function gravar(Request $request){
		$post = $request->all();
		
		
			$data = array(
				'local'=>$post['localAcidente'],
				'categoria'=>$post['categoriaAcidente'],
				'foto'=>$post['fotoAcidente'],
				'mensagem'=>$post['mensagemAcidente']
				);
			$ch = DB::table('publicacao')->insert($data);
			if($ch>0){
				return redirect('/');
			}	
		}
	
}