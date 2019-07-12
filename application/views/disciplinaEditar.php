<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Disciplina</h1><p></p>
        <?php echo form_open('disciplina/atualizar'); ?>
        <input type="text" class="hide form-control form-control-lg" 
                   name="IdDisciplina" value="<?php echo $disciplinaEditar[0] -> IdDisciplina; ?>"/>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Nome_Disciplina" placeholder="Nome_Disciplina" value="<?php echo $disciplinaEditar[0] -> Nome_Disciplina; ?>"/>
        </div>
        
        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../disciplina" 
           id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
</div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>