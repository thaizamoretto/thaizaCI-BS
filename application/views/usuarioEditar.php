<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        
        <h1 class="jumbotron-heading">Usuario editar</h1><p></p>
        
        <?php echo form_open('usuario/atualizar'); ?>
        <input type="text" class="hide form-control form-control-lg" 
               name="idusuario" value="<?php echo $usuarioEditar[0] -> idusuario; ?>" required/>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="nomeUsuario" placeholder="nome Usuario" value="<?php echo $usuarioEditar[0] -> nomeUsuario; ?>" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="user" placeholder="usuer" value="<?php echo $usuarioEditar[0] -> user; ?>" required/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" 
                   name="senha" placeholder="senha" required/>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Administrador" 
                    <?php if($usuarioEditar[0]->perfilAcesso === "ADMINISTRADOR") echo set_radio('perfilAcesso','1',True);?> required>
                <label class="form-check-label" for="inlineRadio1">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario" 
                       <?php if($usuarioEditar[0]->perfilAcesso === "USUARIO") echo set_radio('perfilAcesso','1',True);?> required>
                <label class="form-check-label" for="inlineRadio2">Usuario</label>
            </div>
        </div>
        
        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../usuario " 
           id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
        
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>