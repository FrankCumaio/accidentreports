<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class PagesController extends Controller
{
    public function home() {
    	$data = DB::table('publicacao')->get();
    	return view('conteudo')->with('data',$data);
    	
    }

   
}
