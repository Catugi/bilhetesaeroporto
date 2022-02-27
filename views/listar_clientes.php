<?php

require_once("../auth/conectar.php"); 
require_once("../auth/gerir_sessao.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/tabelas.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/menus.css">
    <title>Início</title>
</head>

<body>
    <header>

        <div class="navbar">
            <div class="subnav">
                <button class="subnavbtn">Sobre</button>
                <div class="subnav-content">
                    <a href="sobreOAeoroporto.html">Aeroporto xyz</a>
                </div>
            </div>
            
            <div class="subnav">
                <button class="subnavbtn">Relatórios</button>
                <div class="subnav-content">
                    <a href="relatorioVoosSairam.php">Voos que sairam</a>
                    <a href="relatorioVoosChegaram.php">Voos que chegaram</a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbtn">Cadastrar</button>
                <div class="subnav-content">
                    <a href="cadastro_clientes.php">Clientes</a>
                    <a href="cadastro_voo.php">Voos</a>
                    <a href="cadastro_aeronave.php">Aeronáveis</a>
                    <a href="cadastro_funcionario.php">Funcionário</a>
                </div>
            </div>
            <div class="subnav">
                <button class="subnavbtn">Listar</button>
                <div class="subnav-content">
                    <a href="listar_clientes.php">Clientes</a>
                    <a href="listar_voos.php">Voos</a>
                    <a href="listar_aeronaves.php">Aeronáveis</a>
                    <a href="listar_funcionarios.php">Funcionário</a>

                </div>
            </div>
            <a href="#">Vender</a>
            <a href="home.php">Início</a>
        </div>
        
        <h1>Aeroporto XYZ</h1>

        <form action="../auth/sair.php" method="post">
            <button type="submit">Sair</button>
        </form>
    </header>

    <form action="apaga_cliente.php" method="post">
     <div class="container">
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Bilhete ID</th>
                    <th scope="col">Motivo da viagem</th>
                    <th scope="col">Voo</th>
                    <th scope="col">Assento</th>

                </tr>
            </thead>
         <tbody>

            <!-- Incia -->
            <!-- Este código seleciona todos os dados que estão na tabela cliente e 
            popula em uma tabela onde se listam todos os clientes cadastrados -->
            <?php
            $query = "SELECT * FROM cliente";
            $result = $conexao->query($query);
            while($row = $result->fetch_assoc()) { ?>
           <tr>
                <td>
                    <input type="text" name="idfunc" id="idfunc" size="2" readonly value="<?php echo $row['idcliente'] ?>">
                </td>
                <td><?php echo $row['primeiro_nome'];?></td>
                <td><?php echo $row['bilhete_id'];?></td>
                <td><?php echo $row['motivo_viagem'];?></td>
                <td><?php echo $row['voo'];?></td>
                <td><?php echo $row['assento'];?></td>

                <td class="botao" > <input id="apagar" type="submit" value="Apagar"></td>
            </tr>
                <?php } ?>
            <!-- Termina aqui -->
        </tbody>
        </table>
    </div>
    </form>
</body>

</html>