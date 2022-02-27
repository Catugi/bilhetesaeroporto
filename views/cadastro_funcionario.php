
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
        <!-- Sub menu sobre -->
            <div class="subnav">
                <button class="subnavbtn">Sobre</button>
                <div class="subnav-content">
                    <a href="sobreOAeoroporto.html">Aeroporto xyz</a>
                </div>
            </div>

            <!-- Sub menu Relatórios -->
            <div class="subnav">
                <button class="subnavbtn">Relatórios</em></button>
                <div class="subnav-content">
                    <a href="relatorioVoosSairam.php">Voos que sairam</a>
                    <a href="relatorioVoosChegaram.php">Voos que chegaram</a>
                </div>
            </div>

            <!-- Sub menu Cadastrar -->
            <div class="subnav">
                <button class="subnavbtn">Cadastrar</button>
                <div class="subnav-content">
                    <a href="cadastro_clientes.php">Clientes</a>
                    <a href="cadastro_voo.php">Voos</a>
                    <a href="cadastro_aeronave.php">Aeronáveis</a>
                    <a href="cadastro_funcionario.php">Funcionário</a>
                </div>
            </div>

            <!-- Sub menu Listar -->
            <div class="subnav">
                <button class="subnavbtn">Listar</button>
                <div class="subnav-content">
                    <a href="listar_clientes.php">Clientes</a>
                    <a href="listar_voos.php">Voos</a>
                    <a href="listar_aeronaves.php">Aeronáveis</a>
                    <a href="listar_funcionarios.php">Funcionário</a>

                </div>
            </div>

            <!-- Sub menu Vende e Início -->
            <a href="#">Vender</a>
            <a href="home.php">Início</a>
        </div>

        <!-- Logo do aeroporto no lado esquerdo do menu -->
        <h1>Aeroporto XYZ</h1>
        <form action="../auth/sair.php" method="post">
            <button type="submit">Sair</button>
        </form>
    </header>

    <!-- Formulário começa -->
    <div class="container">
        <form action="insere_funcionario.php" method="POST">
            <div class="frmtl">
                <label for="dados_pessoais" class="titulos"></strong>Cadastrar funcionário</label>

            </div>

            <div class="dados_pessoais" name="dados_pessoais">

                <div class="interno nome">
                    <label for="prim_nome">Primeiro nome</label>
                    <input type="text" id="p_nome" class="ctrl_enter" name="prim_nome" placeholder="Primeiro Nome"
                        required>
                </div>

                <div class="interno">
                    <label for="ult_nome">Último nome</label>
                    <input type="text" id="u_nome" name="ult_nome" placeholder="Último nome" required>
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

            <div class="dados_pessoais">

                <div class="interno cargo">
                    <label for="cargo">Cargo</label>
                    <input type="text" name="cargo" id="cargo" placeholder="Cargo" required>
                </div>

                <div class="interno morada">
                    <label for="morada">Morada</label>
                    <input type="text" name="morada" id="morada" placeholder="Morada" required>
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

                <div class="interno telefone">
                    <label for="telefone_pr">Telefone principal</label>
                    <input type="text" name="telefone_pr" id="telefone_pr" placeholder="Telefone principal" required>

                </div>
                <div class="interno telefone">
                    <label for="telefone_alt">Telefone alternativo</label>
                    <input type="text" name="telefone_alt" id="telefone_alt" placeholder="Telefone alternativo" required>
                </div>
            </div>
            <div class="dados_pessoais_">

                <div class="interno usuario">
                    <label for="nome_usuario">Nome de Usuário</label>
                    <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome de Usuario" required>

                </div>
                <div class="interno senha">
                    <label for="senha">Senha</label>
                    <input type="text" name="senha" id="senha" placeholder="Senha" required>
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