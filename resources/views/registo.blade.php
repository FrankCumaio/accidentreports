@extends('default')
@section('content')
<div class="conteudo2" >
<h4 style="text-align:center">Preencha os seus dados</h4>
{!! Form::open(array('url'=>'gravarUsuario','method'=>'POST')) !!}
<div class="control-group">
  <div class="controls">
  <br>
    <div ="row">
      <div class="col-md-6">
  {!! Form::text('nome','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Nome Proprio')) !!}
  @if ($errors->has('nome'))<p style="color:red;">{!!$errors->first('nome')!!}</p>@endif
      </div>
            <div class="col-md-6">
  {!! Form::text('apelido','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Apelido')) !!}
  @if ($errors->has('apelido'))<p style="color:red;">{!!$errors->first('apelido')!!}</p>@endif
      </div>
</div>
<br>
<div class="control-group">
  <div class="controls col-md-12">
  <br>
  {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'E-mail')) !!}
  @if ($errors->has('email'))<p style="color:red;">{!!$errors->first('email')!!}</p>@endif
  </div>
</div>

<div class="control-group ">
  <div class="controls col-md-12">
  <br>
  {!! Form::password('senha',array('class'=>'form-control span6', 'placeholder' => 'Introduza a senha')) !!}
  @if ($errors->has('senha'))<p style="color:red;">{!!$errors->first('senha')!!}</p>@endif
  </div>
</div>

<div class="control-group">
  <div class="controls col-md-12">
  <br>
  {!! Form::password('csenha',array('class'=>'form-control span6', 'placeholder' => 'Confirmar a senha')) !!}
  @if ($errors->has('csenha'))<p style="color:red;">{!!$errors->first('csenha')!!}</p>@endif
  <br>
  </div>
</div>
<div class="text-center">
{{ Form::submit(
    'Registar',
    array(
        'class'=>'btn btn-danger',
        'type'=>'submit')) 
}}
</div>
{!! Form::close() !!}
</div>
<script type="text/javascript" src="{{asset('assets/js/jquery-2.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
@stop