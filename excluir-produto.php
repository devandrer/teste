<?php
include("php/funcoes.php");
//buscar os dados do usuario do ID recebido por GET
$produto = buscaProdutoId($_GET['id']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
</head>
<body>
    <form method="POST" action="php/salvaProduto.php?opcao=E&id=<?php echo $_GET['id'];?>">
    
    <p>
        <label>Deseja realmente excluir o produto <?php echo $produto['descricao']?> </label>
    </p>
        
    <p>
        <a href="produtos.php">
            <input type="button" value="Não">
        </a>
        <input type="submit" value="Sim">
    </p>


    </form>
    
</body>
</html>