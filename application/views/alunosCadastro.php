<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Aluno</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Nome" placeholder="Nome"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="RG" placeholder="RG"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="CPF" placeholder="CPF"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Endereco" placeholder="Endereço"/>
        </div>

        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio1" value="Feminino">
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Sexo" id="inlineRadio2" value="Masculino">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
        </div>



        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home" 
           id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
        
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div class="row">
    <div class="col-lg-2 col-md-2 col-2"></div>
    <div class="col-lg-8 col-md-8 col-8">

        <h1 class="jumbotron-heading">Lista de Aluno</h1><p></p>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">Id_Aluno</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">RG</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Sexo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $row): ?>
                    <tr>
                        <td> <?php echo $row->Id_Aluno; ?></td>
                        <td> <?php echo $row->Nome; ?></td>
                        <td> <?php echo $row->Endereco; ?></td>
                        <td> <?php echo $row->RG; ?></td>
                        <td><?php echo $row->CPF; ?></td>
                        <td> <?php echo $row->Sexo; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-2 col-md-2 col-2"></div>
</div>
<script>
        $(document).ready(function() {
            $('#table_id').dataTable({
        });
    });
</script>