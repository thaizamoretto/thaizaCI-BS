<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
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
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div class="row">
    <div class="col-lg-2 col-md-2 col-2"></div>
    <div class="col-lg-8 col-md-8 col-8">

        <table class="table table-bordered">
            <thead class="bg-secondary">
                <tr>
                    <th scope="col">IdDisciplina</th>
                    <th scope="col">Nome_Disciplina</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disciplina as $row): ?>
                    <tr>
                        <td> <?php echo $row->IdDisciplina; ?></td>
                        <td> <?php echo $row->Nome_Disciplina; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-2 col-md-2 col-2"></div>
</div>