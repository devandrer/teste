<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
</head>
<body>
    <h5>
        <a href="menu.php">Voltar</a>
    </h5>
    
    <form method="POST" action="php/salvaProduto.php?opcao=I">
       
    <p>
        <label>Descrição: </label>
        <input type="text" name="nDescricao" maxlength="60" required>
    </p>
    <p>
        <label>Quantidade: </label>
        <input type="text" name="nQuantidade" maxlength="8" required>
    </p>
    <p>
        <label>Valor Unitário: </label>
        <input type="text" name="nValorunitario" maxlength="8" required>
    </p>
    <p>
        <input type="checkbox" name="nAtivo" id="iAtivo">
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