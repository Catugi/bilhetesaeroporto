<?php
    require_once('../auth/conectar.php');
    $id = $_POST['idfunc'];
    $query =  "DELETE FROM `cliente` WHERE `idcliente` = $id";
    $result = $conexao->query($query);
    header('Location: listar_clientes.php');
?>