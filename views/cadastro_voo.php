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
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/menus.css">
    <link rel="stylesheet" href="../static/css/formularios.css">
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
                <button class="subnavbtn">Relatórios</em></button>
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

 <!-- Formulário começa -->
    <div class="container">
        <form action="insere_voo.php" method="POST">
            <div class="frmtl">
                <label for="dados_pessoais" class="titulos"></strong>Cadastrar Voos</label>

            </div>

            <div class="dados_pessoais" name="dados_pessoais">

                <div class="interno fonte">
                    <label for="fonte">Fonte</label>
                    <input type="text" id="fonte" class="ctrl_enter" name="fonte" placeholder="Fonte"
                        required>
                </div>

                <div class="interno">
                    <label for="destino">Destino</label>
                    <input type="text" id="destino" name="destino" placeholder="Destino" required>
                </div>


            </div>

            <div class="dados_pessoais">
                <div class="interno data_voo">
                    <label for="data_voo">Data do voo</label>
                    <input type="date" name="data_voo" id="data_voo" required>
                </div>
                <div class="interno hora_p">
                    <label for="hora_partida" id="ident">Hora de Partida</label>
                    <input type="text" name="hora_partida" id="hora_partida" placeholder="Hora de partida" required>
                </div>

            </div>

            <div class="dados_pessoais">

                <div class="interno hora_c">
                    <label for="hora_p_chegada">Hora prevista de chegada</label>
                    <input type="text" name="hora_p_chegada" id="hora_p_chegada" placeholder="Hora prevista de chegada" required>
                </div>

                <div class="interno aeronave">
                    <label for="aeronave">Aeronave</label>
                    <select name="aeronave" id="aeronave">
                        <option value="Selecione uma aeronave">Selecione uma aeronave aqui</option>
                        <?php
                        $sql = "SELECT * FROM aeronave";
                        $result = $conexao->query($sql);
                        while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['idaeronave']; ?>">
                            <?php echo " ".$row['modelo']." ".$row['codinome']; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="dados_pessoais_">

                <div class="interno num_passageiros">
                    <label for="num_passageiros">Número de passageiros</label>
                    <input type="number" name="num_passageiros" id="num_passageiros" placeholder="Número de passageiros">
                </div>
                <div class="interno piloto">
                    <label for="pilto">Piloto</label>
                    <select name="piloto" id="pilto">
                        <option value="nenhum">Selecione um piloto aqui</option>
                        <?php
                        $sql = "SELECT * FROM funcionario WHERE cargo = 'piloto'";
                        $result = $conexao->query($sql);
                        while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['idfuncionario']; ?>">
                            <?php echo " ".$row['primeiro_nome']; ?>
                        </option>
                        <?php
                    }
                    ?>
                    </select>
                </div>

            </div>

            <div class="btn">
                <input type="submit" id="enviar" value="Enviar">
                <input type="reset" id="limpar" value="Limpar">
            </div>
        </form>
    </div>

    <!-- Formulário Termina -->
</body>

</html>