<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        
        <h1 class="jumbotron-heading">Alunos editar</h1><p></p>
        
        <?php echo form_open('alunos/atualizar'); ?>
        <input type="text" class="hide form-control form-control-lg" 
                   name="Id_Aluno" value="<?php echo $alunosEditar[0] -> Id_Aluno; ?>"/>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Nome" placeholder="Nome" value="<?php echo $alunosEditar[0] -> Nome; ?>"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="RG" placeholder="RG" value="<?php echo $alunosEditar[0] -> RG; ?>"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="CPF" placeholder="CPF" value="<?php echo $alunosEditar[0] -> CPF; ?>"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Endereco" placeholder="Endereço" value="<?php echo $alunosEditar[0] -> Endereco; ?>"/>
        </div>

        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio1" value="Feminino"
                       <?php if($alunosEditar[0]->Sexo === "FEMININO") echo set_radio('Sexo','1',True);?>>
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio2" value="Masculino"
                       <?php if($alunosEditar[0]->Sexo === "MASCULINO") echo set_radio('Sexo','1',True);?>>
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
        </div>
        
        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../alunos" 
           id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
        
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>