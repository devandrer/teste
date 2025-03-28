<?php
include("php/funcoes.php");
//buscar os dados do usuario do ID recebido por GET
$usuario = buscaUsuarioId($_GET['id']);



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário</title>
</head>
<body>
    <form method="POST" action="php/salvaUsuario.php?opcao=E&id=<?php echo $_GET['id'];?>">
    
    <p>
        <label>Deseja realmente excluir o usuário <?php echo $usuario['nome']?> </label>
    </p>
        
    <p>
        <a href="usuarios.php">
            <input type="button" value="Não">
        </a>
        <input type="submit" value="Salvar">
    </p>


    </form>
    
</body>
</html>