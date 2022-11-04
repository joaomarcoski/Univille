<?php
  $usuario_cookie = $_COOKIE['usuario'];
    if(isset($usuario_cookie)){
      echo"Bem-Vindo, $usuario_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='usuario.html'>Faça usuario</a> Para ler o conteúdo";
    }
?>