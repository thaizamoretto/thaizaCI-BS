<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >

        <title>Protejo Aulas</title>

        <meta http-equiv="Content-Language" content="pt-br">
        <link rel="icon" href="<?php base_url(); ?> image/logo-facebook.png"  type="image/x-icon" sizes="16x16" />
        <!--Bootstrap Core CSS -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!--JS-->
        <link href="<?php echo base_url('assets/js/bootstrap.min.js') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/js/jquery.min.js') ?>" rel="stylesheet">

        <!-- Data Tabeles -->
        <!--On Line -->
        <!-- <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"> -->

        <!--Off Line -->
        <link href="<?php echo base_url('DataTables/datatables.min.css') ?>" rel="stylesheet" type="text/css">

        <!--On Line -->
        <!-- <link href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" rel="stylesheet"> -->

        <!--Off Line -->
        <script src="<?php echo base_url('DataTables/jquery.min.js') ?>" ></script>



    </head>
    <body>
        <div class="container"> 
            <?php
            // put your code here
            if ($this->session->userdata('estou_logado')) {
                ?>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <h1 class=navbar-brand" href="#">Protejo Aulas</h1>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cadastro
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>alunos">Alunos</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>disciplina">Disciplina</a>
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>usuario">Usuario</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <?php
                    // put your code here
                    if ($this->session->userdata('estou_logado')) {
                        echo $this->session->userdata('logado')->nomeUsuario;
                    }
                    ?>
                    <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url(); ?>login/sair" >Sair</a>
                </nav>
<?php } ?>