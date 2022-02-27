<?php

    require_once("../auth/conectar.php");    
    require_once("../auth/gerir_sessao.php");

    $modelo = $_POST['modelo'];
    $codinome = $_POST['codinome'];
    $data_fabrica = $_POST['fabricacao'];
    $empresa_fabica = $_POST['empresa_facbricante'];   
    $lotacao = $_POST['lotacao'];
    $porte = $_POST['porte'];
    
    $id= 0;
    $idquery = "SELECT idaeronave FROM aeronave";
    $idresult = $conexao->query($idquery);

    if ($idresult->num_rows > 0) 
    {
        while($row = $idresult->fetch_assoc()) {
            $id++;
        }
    }

    $query = "INSERT INTO `aeronave` (`idaeronave`, `modelo`, `codinome`, `data_fabrica`, `empresa_fabica`, `lotacao`, `porte`) VALUES ('$id', '$modelo', '$codinome', '$data_fabrica', '$empresa_fabica', '$lotacao', '$porte')";
    $conexao->query($query);
    if(mysqli_affected_rows($conexao) > 0 )
    {
        header("Location: cadastro_aeronave.php");
    }
    else{

        ?>
    <script>alert("Cadastro não salvo")</script>
<?php
    $conexao->close();
}
?>
