<?php
    include "conecta.php";
    $usuario = $_POST['usuario'];
    $senha = MD5($_POST['senha']);
    $query_select = "INSERT INTO cadastro(usuario,senha) VALUES (:usuario,:senha)";
    $stm_sql = $connection->prepare($query_select);
    $stm_sql->bindParam(':usuario', $usuario);
    $stm_sql->bindParam(':senha', $senha);
    $result = $stm_sql->execute();

?>