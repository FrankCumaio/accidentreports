
<nav class="navbar navbar-default ">
		  <div class="container-fluid centrarHeader">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Menu</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="{{action('publicacaoController@home')}}">QUE CHATO</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SOCORRO <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="">CHAMAR AMBULÂNCIA</a></li>
		            <li><a href="#">CHAMAR BOMBEIROS</a></li>
		            <li><a href="#">CHAMAR PRM</a></li>
		          </ul>
		        </li>
		      </ul>
		      <?php  if (Auth::check()){  $email = Auth::user()->email; ?>

		       <ul class="nav pull-right">
		      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="glyphicon glyphicon-user"></i> <?php echo($email);?>
    </a>
    <div class="dropdown-menu form-login stop-propagation" role="menu">
    	<a href="logout"><i class="glyphicon glyphicon-log-out"></i> LogOut</a>
   	</div>
	</li>
       </ul>

		      <?php }else{   ?>
		      <ul class="nav pull-right">
		      <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <i class="glyphicon glyphicon-user"></i> LOGIN
    </a>

    <div class="dropdown-menu form-login stop-propagation" role="menu">
    	{!! Form::open(array('url'=>'login','method'=>'POST')) !!}
          <div class="form-group">
            <label for="exampleInputEmail1">
               <i class="glyphicon glyphicon-envelope"></i> E-mail
            </label> 
            {{ Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'E-mail')) }}
          </div>
        <div class="form-group">
            <label for="exampleInputPassword1">
                <i class="glyphicon glyphicon-lock"></i> Senha
            </label> 
            {{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Introduza a senha')) }}
        <a href="{{action('usuariosController@registo')}}">Nao possui conta? Registe-se aqui</a>
        </div>
        <button type="submit" class="btn btn-success btn-block"><i class="glyphicon glyphicon-ok"></i> Autenticar</button>
   		{!! Form::close() !!}
   </div>
</li>
       </ul>

       <?php } ?>
		    </div><!-- /.navbar-collapse -->

		  </div><!-- /.container-fluid -->
</nav>

