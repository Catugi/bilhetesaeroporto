<?php

    require_once("../auth/conectar.php");    
    require_once("../auth/gerir_sessao.php");

    $primeiro_nome = $_GET['prim_nome'];
    $ultimo_nome = $_GET['ult_nome'];
    $data_nascimento = $_GET['nascimento'];
    $bilhete_id = $_GET['identicacao'];   
    $genero = $_GET['genero'];
    $email = $_GET['email'];
    $telefone = $_GET['telefone_pr'];
    $motivo_viagem = $_GET['cargo'];
    $voo = $_GET['morada'];
    $assento = $_GET['assento'];

    $id= 0;
    $idquery = "SELECT idcliente FROM cliente";
    $idresult = $conexao->query($idquery);

    if ($idresult->num_rows > 0) 
    {
        while($row = $idresult->fetch_assoc()) {
            $id++;
        }
    }

    $query = "INSERT INTO `cliente` (`idcliente`, `primeiro_nome`, `ultimo_nome`, `data_nascimento`, `bilhete_id`, `genero`, `email`, `telefone`, `motivo_viagem`, `voo`, `assento`) VALUES ('$id', '$primeiro_nome', '$ultimo_nome', '$data_nascimento', '$bilhete_id', '$genero', '$email', '$telefone', '$motivo_viagem', '$voo', '$assento')";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("location: cadastro_clientes.php");
    }else{
?>
    <script>alert("Cadastro não salvo")</script>
<?php
    header("location: cadastro_clientes.php");
    $conexao->close();
}
?>
