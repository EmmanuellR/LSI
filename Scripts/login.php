  
  <?php
  include("conexao.php");
  ?>

<form class="form-horizontal">
  <div class="control-group">



  <div class="control-group">
    <div class="controls">
        
      <h2 align = "center"> Login: <input type = "text" name = "login" size "20" required placeholder = "Login"/></h2>
      <h2 align = "center"> Senha: <input type = "password" name = "senha" size "20" required placeholder = "Senha"/></h2>
      <h4 align = "center"> <input type="checkbox" name="selecionar" value="sim"/> Lembrar senha </h4>
      <h2 align = "center"> <input type="submit" value="Entrar"> </h2> 
      <h2 align = "center"> <button class="btn" type="reset">Limpar</button> </h2>
      <h5 align = "center"> <p class="message">Não é registrado? <a href = "cadastrar_usuario.php"> Clique Aqui </p></p></h5>
    </div>
  </div>
</form>


<?php
session_start();
$login=isset($_POST["login"]) ? $_POST["login"] : " ";
$senha=isset($_POST["senha"]) ? $_POST["senha"] : " ";


if($login!=" "){
  $con = mysql_connect('127.0.0.1', 'root', ''); 
  mysql_select_db("clinicmed", $con);
  $er_login="ERRO!!  login invalida</br>";
  $er_senha="ERRO!!  senha invalido</br> ";
  
  $strSQL = "SELECT * FROM bdusuarios";//query SQL
  $rs = mysql_query($strSQL); // Executa a query (o recordset $rs contém o resultado da query)
  while($array = mysql_fetch_array($rs)){ // Cada linha vai para um array  usando mysql_fetch_array
    if($array[3]==$login){
      $er_login="certo";
    }
    if($array[4]==$senha && $array[3]==$login){
      $er_senha="certo";
    }
  }
  if($er_login=="certo"){
    if($er_senha=="certo"){     
      $botao1=isset($_POST["selecionar"]) ? $_POST["selecionar"] : " ";
      
      if($botao1!=" "){// deletar
        setcookie("user", "$login", time()+600);
        header('location:index_sistema.php');  
      }else{
        #session_start();
        #as variáveis login e senha recebem os dados digitados na página anterior 
      
        $_SESSION['login'] = $login; 
        $_SESSION['senha'] = $senha; 
        header('location:index_sistema.php'); 
      }
      
    }else{
      echo"<table bgcolor=#FF8C00 width=300 align=center><tr>
        <td><center><font face=Verdana size=2> ERRRO!! senha invalida </td>
        </tr></table>";
      ?>
      <script type="text/javascript">
        window.setTimeout("location.href='javascript:window.history.go(-1)';", 900);
      </script>
      <?php    
    }
  }else{
    echo"<table bgcolor=#FF8C00 width=300  align=center><tr>
        <td><center><font face=Verdana size=2> ERRO!! login invalido </td>
      </tr></table>";
    ?>
      <script type="text/javascript">
        window.setTimeout("location.href='login.php';", 900);
      </script>
    <?php 
        
      
  }
}



?> 
</body>
</html>



