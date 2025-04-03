<?php
    include("php/funcoes.php")
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
</head>
<body>
    <form method="POST" action="php/salvaUsuario.php?opcao=I&id=0" enctype="multipart/form-data">
    
    <p>
        <label>Nome: </label>
        <input type="text" name="nNome" maxlength="80" required>
    </p>
    
    <p>
        <label for="iTipo">Tipo do Usuário: </label>
        <select name="nTipo" id="iTipo" required>
            <option value="">Selecione...</option>
            <?php echo optionTipoUsuario(0);?>
        </select>
    </p>

    <p>
        <label>Login: </label>
        <input type="email" name="nLogin" maxlength="60" required>
    </p>
    <p> 
        <label>Senha: </label>
        <input type="password" name="nSenha" maxlength="8" required>
    </p>

    <p>
        <label>Foto: </label>
        <input type="file" name="nFoto" accept="imagem/*">
    </p>

    <p>
        <input type="checkbox" name="nAtivo" id="iAtivo">
        <label for="iAtivo">Usuário Ativo </label>
    </p>
    <p>
        <label>Data Nascimento: </label>
        <input type="date" name="nData" maxlength="8">
    </p>
    
    <p>
        <input type="reset" value="Limpar">
        <input type="submit" value="Salvar">

        <a href="usuarios.php"><input type="button" value="Voltar"></a>
    </p>


    </form>
    
</body>
</html>