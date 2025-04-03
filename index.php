<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>

<body>  
    <form method="POST" action="php/validacao.php">
        <p>
            <label class="text-secondary">E-mail: </label>
            <input type="email" id="iEmail" name="nEmail">
        </p>
        <p>
            <label>Senha: </label>
            <input type="password" id="iSenha" name="nSenha">
        </p>
        <input type="submit" value="Entrar">
    </form> 
    <script src="dist/js/bootstrap.min.js"></script>

</body>
</html>