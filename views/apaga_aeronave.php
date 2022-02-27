<?php
    require_once('../auth/conectar.php');
    $id = $_POST['idfunc'];
    $query =  "DELETE FROM `aeronave` WHERE `idaeronave` = $id";
    $result = $conexao->query($query);
    header('Location: listar_aeronaves.php');
?>