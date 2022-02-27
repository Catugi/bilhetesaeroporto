<?php

    require_once("../auth/conectar.php");    
    require_once("../auth/gerir_sessao.php");

    $fonte = $_POST['fonte'];
    $destino = $_POST['destino'];
    $data_voo = $_POST['data_voo'];
    $hora_partida = $_POST['hora_partida'];   
    $hora_prevista_chegada = $_POST['hora_p_chegada'];
    $aeronave = $_POST['aeronave'];
    $num_passageiros = $_POST['num_passageiros'];
    $piloto = $_POST['piloto'];

    if (empty($fonte)) { ?>
        <script>alert("O campo fonte não capturado corretamente");</script>
    <?php
    }
    
    $id= 0;
    $idquery = "SELECT idvoo FROM voo";
    $idresult = $conexao->query($idquery);

    if ($idresult->num_rows > 0) 
    {
        while($row = $idresult->fetch_assoc())
        {
            $id++;
        }
    }

    $query = "INSERT INTO `voo` (`idvoo`, `fonte`, `destino`, `data_voo`, `hora_partida`, `hora_prevista_chegada`, `aeronave`, `num_passageiros`, `piloto`) VALUES ('$id', '$fonte', '$destino', '$data_voo', '$hora_partida', '$hora_prevista_chegada', '$aeronave', '$num_passageiros', '$piloto')";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: cadastro_voo.php");
    }
    else{
?>
    <script>alert("Cadastro não salvo")</script>
<?php
    $conexao->close();
}
?>
