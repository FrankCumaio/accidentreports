<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8"/>
	<title>Poxa Que Chato!</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilo.css')}}">
	</head>
<body>
<header>
<nav class="navbar navbar-default ">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Menu</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">QUE CHATO</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="" data-toggle="modal" data-target="#myModalHorizontal">REPORTAR</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SOCORRO <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">CHAMAR AMBULÂNCIA</a></li>
		            <li><a href="#">CHAMAR BOMBEIROS</a></li>
		            <li><a href="#">CHAMAR PRM</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
</header>
<div class="conteudo2" >
    <h4 style="text-align:center">Diga-nos, o que esta a acontecer?</h4>
    <form action="{{action('publicacaoController@gravar')}}" method="post">
        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos Obrigatorios</strong></div>
                <div class="form-group">
                    <input type="hidden" name="_token" value="<?=csrf_token();?>">
                    <label for="InputName">Localidade de ocorrencia</label>
                    <div class="input-group">
                        <input type=text class="form-control" name="localAcidente">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Categoria do Acidente</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="categoriaAcidente">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Anexar Foto</label>
                    <div class="input-group">
                        <input type="file" class="form-control" name="fotoAcidente" placeholder="Selecione uma foto" required>
                        <span class="input-group-addon"><span class="   glyphicon glyphicon-camera"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Mensagem</label>
                    <div class="input-group">
                        <textarea name="mensagemAcidente"  class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                    </div>
                </div>
                <button type="submit"class="btn btn-primary">
                    Reportar
                </button>
        </form>
</div>
<div class="conteudo">
	@yield('content')
</div>
<div id="carregar">
		<nav>
		  <ul class="pager">
		    <li><a href="#">Carregar Mais</a></li>
		  </ul>
		</nav>
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
</body>
</html>