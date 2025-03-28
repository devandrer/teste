<?php
include("php/funcoes.php");
//buscar os dados do usuario do ID recebido por GET
$produto = buscaProdutoId($_GET["id"]);

$flagAtivo = '';
if($produto['flg_ativo'] == 'S'){
    $flagAtivo = 'checked'; 
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
</head>
<body>
    <form method="POST" action="php/salvaProduto.php?opcao=A&id=<?php echo $_GET["id"];?>">
    
    <p>
        <label>Descrição: </label>
        <input type="text" value="<?php echo $produto['descricao'];?>" name="nDescricao" maxlength="60" required>
    </p>
    <p>
        <label>Quantidade: </label>
        <input type="text" value="<?php echo $produto['quantidade'];?>" name="nQuantidade" maxlength="8" required>
    </p>
    <p>
        <label>Valor Unitário: </label>
        <input type="text" value="<?php echo $produto['valor_unitario'];?>" name="nValorunitario" maxlength="8" required>
    </p>
    <p>
        <input type="checkbox" name="nAtivo" id="iAtivo" <?php echo $flagAtivo;?>>
        <label for="iAtivo">Produto Ativo </label>
    </p>
    
    <p>
        <input type="reset" value="Limpar">
        <input type="submit" value="Salvar">

        <a href="menu.php"><input type="button" value="Voltar"></a>
    </p>
    </form>
    
</body>
</html>