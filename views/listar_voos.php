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
<form action="apaga_voo.php" method="post">
 <div class="container">
        <table>
            <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fonte</th>
                    <th scope="col">Destino</th>
                    <th scope="col">Data do voo</th>
                    <th scope="col">Hora da partida</th>
                    <th scope="col">Aeronave</th>
                    <th scope="col">Piloto</th>
                    <th scope="col">Apagar</th>
                </tr>
            </thead>
            <tbody>
            <!-- Incia -->
            <!-- Este código seleciona todos os dados que estão na tabela cliente e 
            popula em uma tabela onde se listam todos os clientes cadastrados -->
            <?php
            $sql = "SELECT * FROM voo";
            $result = $conexao->query($sql);
            while($row = $result->fetch_assoc()) { ?>
           <tr>
                <td>
                    <input type="text" name="idfunc" id="idfunc" size="2" readonly value="<?php echo $row['idvoo'] ?>">
                </td>
                <td><?php echo $row['fonte'];?></td>
                <td><?php echo $row['destino'];?></td>
                <td><?php echo $row['data_voo'];?></td>
                <td><?php echo $row['hora_partida'];?></td>
                <td><?php echo $row['aeronave'];?></td>
                <td><?php echo $row['piloto'];?></td>

                <td class="botao" > <input id="apagar" type="submit" value="Apagar"></td>
            </tr>
                <?php } ?>
        </tbody>
        </table>
    </div>
    </form>
</body>

</html>