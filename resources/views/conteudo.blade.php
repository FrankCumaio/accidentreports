		@extends('home')

		@section('content') 
		<?php
			foreach ($data as $row ) {?>



					<div class="row">
					  <div class="col-xs-3 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="{{$row->foto}}">
					    </a>
					  </div>
					   <div class="card-block col-xs-12 col-md-12">
					    <h4 class="card-title">{{$row->categoria}} - {{$row->local}}</h4>
					    <p class="card-text">{{$row->mensagem}}<a href="#">Ler mais</a></p>
					    <p class="card-text"><small class="text-muted">Reportado a 3 minutos</small></p>
					  </div>
					</div>

			


				<?php }?>
		

			@stop
