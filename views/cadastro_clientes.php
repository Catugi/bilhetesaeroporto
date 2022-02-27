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
    <link rel="stylesheet" href="../static/css/menus.css">
    <link rel="stylesheet" href="../static/css/style.css">
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
        <form method="POST" action="insere_cliente.php">
            <div class="frmtl">
                <label for="dados_pessoais" class="titulos"></strong>Cadastrar bilhete</label>

            </div>

            <div class="dados_pessoais" name="dados_pessoais">

                <div class="interno nome">
                    <label for="prim_nome">Primeiro nome do cliente</label>
                    <input type="text" id="prim_nome" class="ctrl_enter" name="prim_nome" placeholder="Primeiro Nome"
                        required>
                </div>

                <div class="interno">
                    <label for="ult_nome">Último nome do cliente</label>
                    <input type="text" id="ult_nome" name="ult_nome" placeholder="Último nome" required>
                </div>


            </div>

            <div class="dados_pessoais">
                <div class="interno nasci_data">
                    <label for="nascimento">Data de nascimento</label>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>
                <div class="interno bi">
                    <label for="identicacao" id="ident">Bilhete de identidade</label>
                    <input type="text" name="identicacao" id="identicacao" placeholder="Nº do BI" required>
                </div>

            </div>

            <div class="dados_pessoais_">

                <div class="interno genero_">
                    <label for="genero">Gênero</label>
                    <select name="genero" id="genero" required>
                        <option value="vazio">---------</option>
                        <option value="Maculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>
                <div class="interno email_">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>

            </div>

            <div class="dados_pessoais_">

                <div class="interno genero_">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Número de telefone">
                </div>
                <div class="interno email_">
                    <label for="motivo">Motivo da viagem</label>
                    <input type="text" name="motivo" id="motivo" placeholder="Motivo da viagem" required>
                </div>
            </div>
            <div class="dados_pessoais_">

                <div class="interno voo_">
                    <label for="voo">Voo</label>
                    <select name="voo" id="voo" required>
                        <option value="vazio">Selecione um voo aqui</option>
                        <?php
                        $query = "SELECT * FROM voo";
                        $result = $conexao->query($query);
                        while($row = $result->fetch_assoc()) { ?>
                            <option value="<?php echo $row['idvoo']; ?>">
                                <?php echo " ".$row['fonte']." ".$row['destino']; ?>
                            </option>
                            <?php
                        }
                        ?>
                         ?> 
                    </select>
                </div>
                <div class="interno assento">
                    <label for="assento">Assento</label>
                    <input type="number" name="assento" id="assento" placeholder="Assento" required>
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