@extends('default')
@section('content')
<<<<<<< HEAD
<?php   if (Auth::check()){   $idUser=Auth::user()->id; ?>
  <div class="conteudo2" >
    <h4 style="text-align:center">Diga-nos, o que esta a acontecer?</h4>
    {!! Form::open(array('url'=>'gravar','files'=>true,'method'=>'POST')) !!}

    <!-- <form action="{{action('publicacaoController@gravar')}}" method="post" >
  -->     <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <div class="input-group">
     {{ Form::textArea('mensagemAcidente','',array('id'=>'','class'=>'form-control span6','placeholder' => 'O que aconteceu?')) }}

                      <!--                       
                        <textarea name="mensagemAcidente"  class="form-control" placeholder="O que aconteceu?" rows="5" required></textarea>
                      --></div >
                      {{ Form::text('localAcidente','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Localização do Acidente')) }}

                   <!--  <input type="text" class="form-control" aria-label="Left Align" name="localAcidente" placeholder="Localização do Acidente">
                 -->      </div>
                 <div class="tirarZ input-group">
                   <div class="input-group image-preview">

                    {{ Form::text('','',array('id'=>'','class'=>'form-control image-preview-filename')) }}
                    <!-- <input type="text" class="form-control image-preview-filename" disabled="disabled"> --> <!-- don't give a name === doesn't send on POST/GET -->
                    <span class="input-group-btn">
                      <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span class="image-preview-input-title"></span>
                        {{ Form::file('fotoAcidente') }}
                        <!--  <input type="file" accept="image/*" name="fotoAcidente"/> --> <!-- rename it -->
                      </div>
                    <!-- <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span>
                      </button> -->
                      <div class="btn btn-default">

                        {{Form::select('categoriaAcidente',$listaCategorias)}}
                        <!--  <input type="file" accept="image/*" name="fotoAcidente"/> --> <!-- rename it -->
                      </div>

=======
<?php  if (Auth::check()){   $idUser=Auth::user()->id; ?>
<div class="conteudo2" >
  <h4 style="text-align:center">Diga-nos, o que esta a acontecer?</h4>
  {!! Form::open(array('url'=>'gravar','files'=>true,'method'=>'POST')) !!}
                                          
    <!-- <form action="{{action('publicacaoController@gravar')}}" method="post" >
     -->     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                       {{ Form::textArea('mensagemAcidente','',array('id'=>'','class'=>'form-control span6','placeholder' => 'O que aconteceu?')) }}
                              
                      <!--                       
                        <textarea name="mensagemAcidente"  class="form-control" placeholder="O que aconteceu?" rows="5" required></textarea>
                     --></div >
                      {{ Form::text('localAcidente','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Localização do Acidente')) }}
                                                  
                   <!--  <input type="text" class="form-control" aria-label="Left Align" name="localAcidente" placeholder="Localização do Acidente">
           -->      </div>
                <div class="tirarZ input-group">
                 <div class="input-group image-preview">

                  {{ Form::text('','',array('id'=>'','class'=>'form-control image-preview-filename')) }}
                <!-- <input type="text" class="form-control image-preview-filename" disabled="disabled"> --> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span class="image-preview-input-title"></span>
                        {{ Form::file('fotoAcidente') }}
                       <!--  <input type="file" accept="image/*" name="fotoAcidente"/> --> <!-- rename it -->
                    </div>
                    <!-- <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button> -->
                    <div class="btn btn-default">
                       
                        {{Form::select('categoriaAcidente', array('L' => 'Large', 'S' => 'Small'))}}
                       <!--  <input type="file" accept="image/*" name="fotoAcidente"/> --> <!-- rename it -->
                    </div>
                   
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
                   <!--  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    <select name="categoriaAcidente">
                        <option value="Colisao frontal">Colisao frontal</option>
                        <option value="Atropelamento">Atropelamento</option>
                        <option value="Espancamento">Espancamento</option>
                        <option Value ="Ajustes de contas">Ajustes de contas</option>
                    </select>
<<<<<<< HEAD
                  </button> -->
                  {{ Form::submit('Reportar',array('class'=>'btn btn-danger','type'=>'submit')) }}
                   <!--  <button type="submit"class="btn btn-danger">
                        Reportar
                      </button> -->
                    </span>
                  </div>
                </div>      
                {{ Form::close() }}     
                <!-- </form> -->
              </div>
              <?php   }  ?>

              <?php
              foreach ($data as $row ) {
                foreach ($dataCategorias as $row4) {
                 if($row->categoria_id==$row4->idCategoria)
                  $nomeCategoria = $row4->categoria;
              }


              ?>

              <div class="conteudo">




               <div class="row">
                 <div class="col-xs-12 col-md-12">
                   <a href="#" class="thumbnail">
                    <?php $imgsrc = $row->foto;?>
                    <!-- <img src="{{asset('imagens/').'<?php echo $row->foto?>''}}"> -->
                    <!-- <img src="{{asset('imagens/').<?php echo $row->foto?>}}"> -->
                    <img src="{{ asset('imagens/' . $imgsrc) }}" >
                    <!-- <img src="{{asset('assets/img/'<?php echo $row->foto?>'')}}"> -->
                  </a>
                </div>
                <div class="row">
                  <div class="comentario card-block col-xs-12 col-md-12">
                   <h4 class="card-title"><?php echo $nomeCategoria?> - <?php echo $row->local?></h4>
                   <div class="comment more"><?php echo $row->mensagem?></div>
                   <?php foreach ($dataUsers as $row6) {
                      if($row->user_id==$row6->id)
                        $publicador=$row6->name.' '.$row6->surname;
                   }?>
                   <p class="card-text"><small class="text-muted">
                    {{ date('d-F-Y', strtotime($row->created_at)) }} as {{ date('H:i', strtotime($row->created_at)) }} 
                  </small><b class="nomeComentador">Por <?php echo $publicador?></b></p>
                 </div>
               </div>
               <?php if (Auth::check()){    ?>
               <div class="comentarios-block">
                <div class="comentarios">
                 <div class="row">
                  <div class="card-block col-xs-12 col-md-12">
                    <?php
                    $count =0;
                     foreach ($dataComments as $row5) {
                      if($row5->idPublicacao==$row->publicacao_id)
                        $count=$count+1;
                    }   

                    if($count>3){ ?>
                    <p class="card-text"><a href="">Visualizar todos Comentários <?php echo $count;?></a> </p>

                   <?php
                 }
                   foreach ($dataComments as $row2 ) {
                     if($row2->publicacao_id== $row->idPublicacao) {
                      foreach ($dataUsers as $row3 ) {
                        if($row2->user_id == $row3->id)
                          $comentarioUsuario=$row3->name.' '.$row3->surname;
                      }


                      ?>
                      <div>
                       <p class="comentario" name="comentario"><b class="nomeComentador" name="comentador"><?php echo ($comentarioUsuario); ?>  </b>
                        <small>  <?php echo $row2->comentario?> </small></p> 
                        <p class="card-text"><small class="text-muted">{{ date('d-F-Y', strtotime($row2->created_at)) }} as {{ date('H:i', strtotime($row2->created_at)) }}  </small></p>                     

                      </div>
                      <?php }}?>

                      {!! Form::open(array('url'=>'gravarComentario','method'=>'POST')) !!}
                      <div class="input-group">

                        {!! Form::text('comentario','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Deixe o seu comentario')) !!}
                        @if ($errors->has('comentario'))<p style="color:red;">{!!$errors->first('apelido')!!}</p>@endif
                        {{Form::hidden('idPublicacao',$row->idPublicacao)}}
                        <div class="input-group-btn">
                          <span class="tirarZ input-group-btn">
                            {{ Form::submit(
                            'Comentar',
                            array(
                            'class'=>'btn btn-default',
                            'type'=>'submit')) 
                          }}
                                                       <!--  <button class="btn btn-default" type="submit">Comentar</button>
                                                     --> </span>
                                                   </div>
                                                 </div>

                                                 {!! Form::close() !!}

                                                 <p></p>
                                               </div>
                                             </div>
                                           </div>
                                         </div>

                                         <?php }  ?>
                                       </div>






                                     </div>
                                     <?php }?>
                                     <div id="carregar">
                                      <nav>
                                        <ul class="pager">
                                          <li><a href="#">Carregar Mais</a></li>
                                        </ul>
                                      </nav>
                                    </div>
                                    <script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
                                    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
                                    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                                    <script>
                                    $(function(){
                                     $('#login').click(function(){
                                       $(this).next('#login-content').slideToggle();
                                       $(this).toggleClass('active');          

                                       if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
                                       else $(this).find('span').html('&#x25BC;')
                                     })
                                   });

                                    $(document).ready(function() {
                                      var showChar = 500;
                                      var ellipsestext = "...";
                                      var moretext = "Ler Mais";
                                      var lesstext = "Menos";
                                      $('.more').each(function() {
                                        var content = $(this).html();

                                        if(content.length > showChar) {

                                          var c = content.substr(0, showChar);
                                          var h = content.substr(showChar-1, content.length - showChar);

                                          var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

                                          $(this).html(html);
                                        }

                                      });

                                      $(".morelink").click(function(){
                                        if($(this).hasClass("less")) {
                                          $(this).removeClass("less");
                                          $(this).html(moretext);
                                        } else {
                                          $(this).addClass("less");
                                          $(this).html(lesstext);
                                        }
                                        $(this).parent().prev().toggle();
                                        $(this).prev().toggle();
                                        return false;
                                      });
                                    });
=======
                </button> -->
                {{ Form::submit('Reportar',array('class'=>'btn btn-danger','type'=>'submit')) }}
                   <!--  <button type="submit"class="btn btn-danger">
                        Reportar
                    </button> -->
                </span>
            </div>
        </div>      
           {{ Form::close() }}     
        <!-- </form> -->
</div>
<?php   }  ?>
  
   <?php
      foreach ($data as $row ) {?>
 
<div class="conteudo">
	



					<div class="row">
					  <div class="col-xs-12 col-md-12">
					    <a href="#" class="thumbnail">
                <?php $imgsrc = $row->foto;?>
                <!-- <img src="{{asset('imagens/').'<?php echo $row->foto?>''}}"> -->
                <!-- <img src="{{asset('imagens/').<?php echo $row->foto?>}}"> -->
                <img src="{{ asset('imagens/' . $imgsrc) }}" >
					      <!-- <img src="{{asset('assets/img/'<?php echo $row->foto?>'')}}"> -->
					    </a>
					  </div>
					   <div class="row">
                        <div class="comentario card-block col-xs-12 col-md-12">
					    <h4 class="card-title"><?php echo $row->categoria?> - <?php echo $row->local?></h4>
					    <article class="teste"><?php echo $row->mensagem?><a href="#">  Ler mais</a></article>
					    <p class="card-text"><small class="text-muted">Reportado a 3 minutos</small></p>
                        </div>
					  </div>
                      <?php if (Auth::check()){    ?>
					  <div class="comentarios-block">
					    	<div class="comentarios">
					    		<div class="row">
						    		<div class="card-block col-xs-12 col-md-12">
						    			
						    			<p class="card-text"><small class="text-muted">Comentários</small></p>
						    			<?php
                                        foreach ($dataComments as $row2 ) {
                                                 if($row2->publicacao_id== $row->id) {
                                                    foreach ($dataUsers as $row3 ) {
                                                        if($row2->users_id == $row3->id)
                                                            $comentarioUsuario=$row3->name;
                                                    }


                                            ?>
                                        <div>
							    		<p class="comentario" name="comentario"><b class="nomeComentador" name="comentador"><?php echo ($comentarioUsuario); ?>  </b>
                                            
                                            <small>
                                                
                                                <?php echo $row2->comentario?>
                                              </small></p>
							    		</div>
							     <?php }}?>

                                         {!! Form::open(array('url'=>'gravarComentario','method'=>'POST')) !!}
                                            <div class="input-group">
                                                
                                                {!! Form::text('comentario','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Deixe o seu comentario')) !!}
                                                @if ($errors->has('comentario'))<p style="color:red;">{!!$errors->first('apelido')!!}</p>@endif
                                                {{Form::hidden('idUser',$idUser)}}
                                                {{Form::hidden('idPublicacao',$row->id)}}
                                                  <div class="input-group-btn">
                                                    <span class="tirarZ input-group-btn">
                                                        {{ Form::submit(
                                                            'Comentar',
                                                            array(
                                                                'class'=>'btn btn-default',
                                                                'type'=>'submit')) 
                                                        }}
                                                       <!--  <button class="btn btn-default" type="submit">Comentar</button>
                                                     --> </span>
                                                  </div>
                                                 </div>
                                            
                                        {!! Form::close() !!}

					    				<p></p>
						    		</div>
					    		</div>
					    	</div>
					    </div>

                        <?php }  ?>
					</div>

			


			
		
</div>
  <?php }?>
<div id="carregar">
		<nav>
		  <ul class="pager">
		    <li><a href="#">Carregar Mais</a></li>
		  </ul>
		</nav>
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    $(function(){
       $('#login').click(function(){
       $(this).next('#login-content').slideToggle();
       $(this).toggleClass('active');          
        
       if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
          else $(this).find('span').html('&#x25BC;')
       })
    });
>>>>>>> c54f89e05261657be6003b00e8d8cb187e6bf164
</script>
@stop