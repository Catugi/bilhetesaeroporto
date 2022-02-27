<?php
    $conexao = new mysqli("localhost", "root", "Fer123Nando+-*", "aeroporto");
    if(mysqli_connect_errno())
    {
        printf("Conexao falhou: %s\n", mysqli_connect_error());
        exit();
    }
?>