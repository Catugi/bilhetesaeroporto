<?php
    require_once('../auth/conectar.php');
    $id = $_POST['idfunc'];
    $query =  "DELETE FROM `voo` WHERE `idvoo` = $id";
    $result = $conexao->query($query);
    header('Location: listar_voos.php');
?>