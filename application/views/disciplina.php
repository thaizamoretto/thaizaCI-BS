<div class="row">
    <div class="col-lg-2 col-md-2 col-2"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Disciplina</h1><p></p>
        <?php echo form_open('disciplina/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="Nome_Disciplina" placeholder="Nome_Disciplina"/>
        </div>
        
        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home" 
           id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
        
    </div>
    <div class="col-lg-2 col-md-2 col-2"></div>
</div>
<div class="row">
    <div class="col-lg-2 col-md-2 col-2"></div>
    <div class="col-lg-6 col-md-6 col-6">

        <table id="table_id" class="table table-striped table-bordered" style="width:100%"><p></p>
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">IdDisciplina</th>
                    <th scope="col">Nome_Disciplina</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disciplina as $row): ?>
                    <tr>
                        <td> <?php echo $row->IdDisciplina; ?></td>
                        <td> <?php echo $row->Nome_Disciplina; ?></td>
                        <td> 
                            <a href="<?php echo base_url().'disciplina/editar/' . $row -> IdDisciplina; ?>" >Editar
                            <i class ="glyphicon glyphicon-edit"></i></a>
                            
                            <a href="<?php echo base_url().'disciplina/excluir/' . $row -> IdDisciplina; ?>" >Excluir
                            <i class ="glyphicon glyphicon-trash"></i></a> 
                        </td>
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
                language: { "url":"//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"}
        });
    });
</script>