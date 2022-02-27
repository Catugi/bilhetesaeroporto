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
            <a href="vender_bilhete.php">Vender</a>
            <a href="home.php">Início</a>
        </div>
        <h1>Aeroporto XYZ</h1>
        <form action="../auth/sair.php" method="post">
            <button type="submit">Sair</button>
        </form>
    </header>

 <form action="apaga_funcionario.php" method="POST">
 <div class="container">
    <table>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Nome usuário</th>
                <th scope="col">Cargo</th>
                <th scope="col">Telefone</th>
                <th scope="col">Apagar</th>
            </tr>
        </thead>
        <tbody>
            <!-- Incia -->
            <!-- Este código seleciona todos os dados que estão na tabela funcionario e 
            popula em uma tabela onde se listam todos os clientes cadastrados -->
        <?php
            $sql = "SELECT * FROM funcionario";
            $result = $conexao->query($sql);
            while($row = $result->fetch_assoc()) { ?>
           <tr>
                <td>
                    <input type="text" name="idfunc" id="idfunc" size="2" readonly value="<?php echo $row['idfuncionario'] ?>">
                </td>
                <td><?php echo $row['primeiro_nome'];?></td>
                <td><?php echo $row['nome_usuario'];?></td>
                <td><?php echo $row['cargo'];?></td>
                <td><?php echo $row['telefone_principal'];?></td>
                <td class="botao" > <input id="apagar" type="submit" value="Apagar"></td>
            </tr>
                <?php } ?>
        </tbody>
        <tfoot>
        </tfoot>
        </table>
    </div>
    </form>
</body>

</html>