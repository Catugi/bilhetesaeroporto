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
    <!-- Menu termina aqui -->
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
    <!-- Menu termina aqui -->
    </header>

 <!-- Formulário começa -->
    <div class="container">
        <form method="POST" action="insere_aeronave.php">
            <div class="frmtl">
                <label for="dados_pessoais" class="titulos"></strong>Cadastrar Aeronáveis</label>

            </div>

            <div class="dados_pessoais" name="dados_pessoais">

                <div class="interno modelo">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo_" class="ctrl_enter" name="modelo" placeholder="Modelo"
                        required>
                </div>

                <div class="interno">
                    <label for="ult_nome">Codinome</label>
                    <input type="text" id="codinome" name="codinome" placeholder="Codinome" required>
                </div>


            </div>

            <div class="dados_pessoais">
                <div class="interno nasci_data">
                    <label for="fabricacao">Data de fabricação</label>
                    <input type="date" name="fabricacao" id="fabricacao" required>
                </div>
                <div class="interno bi">
                    <label for="empresa_facbricante" id="empresa_fabri">Empresa fabricante</label>
                    <input type="text" name="empresa_facbricante" id="identicacao" placeholder="Empresa fabricante" required>
                </div>

            </div>

            <div class="dados_pessoais">

                <div class="interno lotacao">
                    <label for="lotacao">Lotação</label>
                    <input type="number" name="lotacao" id="lotacao" placeholder="Lotação" required>
                </div>

                <div class="interno porte">
                    <label for="porte">Porte</label>
                    <select name="porte" id="porte">
                        <option value="vazio">-------------</option>
                        <option value="pequenp">Pequeno</option>
                        <option value="medio">Médio</option>
                        <option value="grande">Grande</option>
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