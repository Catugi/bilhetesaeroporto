<?php
    require_once('../auth/conectar.php');
    $id = $_POST['idfunc'];
    $query =  "DELETE FROM funcionario WHERE idfuncionario= $id";
    $result = $conexao->query($query);
    header('Location: listar_funcionarios.php');
?>