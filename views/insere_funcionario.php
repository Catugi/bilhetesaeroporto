<?php

    require_once("../auth/conectar.php");    
    require_once("../auth/gerir_sessao.php");

    $primeiro_nome = $_POST['prim_nome'];
    $ultimo_nome = $_POST['ult_nome'];
    $data_nascimento = $_POST['nascimento'];
    $bilhete_id = $_POST['identicacao'];   
    $cargo = $_POST['cargo'];
    $morada = $_POST['morada'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefone_principal = $_POST['telefone_pr'];
    $telefone_alternativo = $_POST['telefone_alt'];
    $nome_usuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];

    $id= 0;
    $idquery = "SELECT idfuncionario FROM funcionario";
    $idresult = $conexao->query($idquery);

    if ($idresult->num_rows > 0) 
    {
        while($row = $idresult->fetch_assoc()) {
            $id++;
        }
    }

    $query = "INSERT INTO `funcionario` (`idfuncionario`, `primeiro_nome`, `ultimo_nome`, `data_nascimento`, `bilhete_id`, `cargo`, `morada`, `genero`, `email`, `telefone_principal`, `telefone_alternativo`, `nome_usuario`, `senha`) VALUES ('$id', '$primeiro_nome', '$ultimo_nome', '$data_nascimento', '$bilhete_id', '$cargo', '$morada', '$genero', '$email', '$telefone_principal', '$telefone_alternativo', '$nome_usuario', '$senha')";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("location: cadastro_funcionario.php");
    }else{
?>
    <script>alert("Cadastro não salvo")</script>
<?php
    $conexao->close();
}
?>
