﻿
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClinicMed</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    
    <!-- puxando menu -->
    <?php
    include ("menu_sistema.php");
    ?>
        <!-- descrição  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        &nbsp &nbsp

                            <?php 
                            session_start();
                            ?>

                            <?php
                            if ($_SESSION["tipouser"] == "b") {
                                 echo'<a href="editar-usuario.php"><input type="button" name="botao-editar" value="Editar Usuário ">&nbsp &nbsp';
                     



                            
                            }else{
                                echo'
                                <a href="listar_usuario.php"> <input type="button" name="botao-listar" value="Todos os Usuário">';

                            }
                            ?>
                    











                     
                    </div>
                </div>

                 <hr />
               
            
    
   <?php
   include ("scripts_sistema.php");
   ?>
</body>
</html>
