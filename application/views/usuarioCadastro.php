<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuario</h1><p></p>
        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="nomeUsuario" placeholder="nomeUsuario" required/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="user" placeholder="user" required/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" 
                   name="senha" placeholder="senha" required/>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Administrador" required>
                <label class="form-check-label" for="inlineRadio1">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario" required>
                <label class="form-check-label" for="inlineRadio2">Usuario</label>
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
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">

        <h1 class="jumbotron-heading">Lista de Usuario</h1><p></p>
        <table id="table_id" class="table table-striped table-bordered" style="width:100%">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">nomeUsuario</th>
                    <th scope="col">user</th>
                    <th scope="col">perfilAcesso</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $row): ?>
                    <tr>
                        <td> <?php echo $row->nomeUsuario; ?></td>
                        <td> <?php echo $row->user; ?></td>
                        <td> <?php echo $row->perfilAcesso; ?></td>
                        <td> 
                            <a href="<?php echo base_url().'usuario/editar/' . $row -> idusuario; ?>" >Editar
                            <i class ="glyphicon glyphicon-edit"></i></a>
                            
                            <a href="<?php echo base_url().'usuario/excluir/' . $row -> idusuario; ?>" >Excluir
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