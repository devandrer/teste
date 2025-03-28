<?php
include("php/funcoes.php");
//buscar os dados do usuario do ID recebido por GET
$usuario = buscaUsuarioId($_GET['id']);

$flagAtivo = '';
if($usuario['flg_ativo'] == 'S'){
    $flagAtivo = 'checked'; 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Usuário</title>
</head>
<body>
    <form method="POST" action="php/salvaUsuario.php?opcao=A&id=<?php echo $_GET['id'];?>">
    
    <p>
        <label>Nome: </label>
        <input type="text" value="<?php echo $usuario['nome'];?>" name="nNome" maxlength="80" required>
    </p>
    
    <p>
        <label for="iTipo">Tipo do Usuário: </label>
        <select value="<?php echo $usuario['id_tipo_usuario'];?>" name="nTipo" id="iTipo" required>
            <?php echo optionTipoUsuarioId($usuario['id_tipo_usuario']);?>
            <?php echo optionTipoUsuario($usuario['id_tipo_usuario']);?>
        </select>
        </select>
    </p>
    
    <p>
        <label>Login: </label>
        <input type="email" value="<?php echo $usuario['login'];?>" name="nLogin" maxlength="60" required>
    </p>
    <p>
        <label>Senha: </label>
        <input type="password" name="nSenha" maxlength="8">
    </p>
    <p>
        <input type="checkbox" name="nAtivo" id="iAtivo" <?php echo $flagAtivo;?>>
        <label for="iAtivo">Usuário Ativo </label>
    </p>
    
    <p>
        <label>Data Nascimento: </label>
        <input type="date" value="<?php echo $usuario['data_nasc'];?>" name="nData" maxlength="8">
    </p>

    <p>
        <input type="reset" value="Limpar">
        <input type="submit" value="Salvar">

        <a href="usuarios.php"><input type="button" value="Voltar"></a>
    </p>

    </form>
    
</body>
</html>