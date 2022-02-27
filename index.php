<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/index.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <form method="POST" action="auth/validar.php" class="from" id="from">
            <div class="card">
            <div class="card-top">
                <h1>Fazer login</h1>
                </div>
                <div class="card-grup marge">
                    <input type="text" id="usuario" name="usuario" placeholder="Usuário ou Email" required>
                </div>

                <div class="card-grup">
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <div class="card-grup bnt">
                    <button type="submit " class="bnt" id="botao" >Entrar</button>
                </div>

            </div>
        </form>
    </div>
</body>

</html>