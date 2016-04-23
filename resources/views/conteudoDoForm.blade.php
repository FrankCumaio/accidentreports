<div class="conteudo2" >
  <h4 style="text-align:center">Diga-nos, o que esta a acontecer?</h4>
    <form action="{{action('publicacaoController@gravar')}}" method="post" >
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                  
                <!-- <div class="form-group">
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
                </div> -->
                <div class="form-group">
                    <div class="input-group">
                        <textarea name="mensagemAcidente"  class="form-control" placeholder="O que aconteceu?" rows="5" required></textarea>
                    </div >
                    <input type="text" class="form-control" aria-label="Left Align" name="localAcidente" placeholder="Localização do Acidente">
                </div>
                <div class="input-group">
                 <div class="input-group image-preview">


                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-camera"></span>
                        <span class="image-preview-input-title"></span>
                        <input type="file" accept="image/*" name="fotoAcidente"/> <!-- rename it -->
                    </div>
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                    <select name="categoriaAcidente">
                        <option value="Colisao frontal">Colisao frontal</option>
                        <option value="Atropelamento">Atropelamento</option>
                        <option value="Espancamento">Espancamento</option>
                        <option Value ="Ajustes de contas">Ajustes de contas</option>
                    </select>
                </button>
                    <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Colisão Traseira</a></li>
                          <li><a href="#">fgdddffd</a></li>
                          <li><a href="#">gfhjhj</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">gfhjkjhhkj</a></li>
                        </ul> 
 -->
                    <button type="submit"class="btn btn-danger">
                        Reportar
                    </button>
                </span>
            </div>
        </div>      
                
        </form>
</div>