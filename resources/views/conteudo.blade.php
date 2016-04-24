@extends('home')

		@section('content') 
		<?php
			foreach ($data as $row ) {?>



					<div class="row">
					  <div class="col-xs-3 col-md-3">
					    <a href="#" class="thumbnail">
					      <img src="data:image/jpeg;base64,<?php echo $row->foto?>">
					    </a>
					  </div>
					   <div class="card-block col-xs-12 col-md-12">
					    <h4 class="card-title"><?php echo $row->categoria?> - <?php echo $row->local?></h4>
					    <p class="card-text"><?php echo $row->mensagem?><a href="#">  Ler mais</a></p>
					    <p class="card-text"><small class="text-muted">Reportado a 3 minutos</small></p>
					  </div>
					  <div class="comentarios-block">
					    	<div class="comentarios">
					    		<div class="row">
						    		<div class="card-block col-xs-12 col-md-12">
						    			<hr>
						    			<p class="card-text"><small class="text-muted">Comentários</small></p>
						    			<div>
							    		<p class="comentario" name="comentario"><b class="nomeComentador" name="comentador">Alves  </b><small>dfghjghgjhghjgjhgjh
							    		dsgjdhghsgggggg dhsj jhsadhkjd jhkasjh jahksjh jashkjd kjaskjdh
							    		jasdkljhs jkshadkj kjsadhkj</small></p>
							    		</div>
							    		<form method="POST" action="">
							    			<div class="input-group">
												  <input type="text" class="form-control coment" placeholder="seu comentario...">
												  <div class="input-group-btn">
												    <span class="input-group-btn">
												        <button class="btn btn-default" type="button">Comentar</button>
												     </span>
												  </div>
												</div>
					    				</form>
					    				<p></p>
						    		</div>
					    		</div>
					    	</div>
					    </div>
					</div>

			


				<?php }?>
		

			@stop