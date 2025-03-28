<?php
$descricao = $_POST['nDescricao'];
$quantidade = $_POST['nQuantidade'];
$valor_unitario = $_POST['nValorunitario'];
//$ativo = $_POST['nAtivo'];
$opcao = $_GET['opcao'];
$id = $_GET["id"];


if($_POST['nAtivo'] == 'on'){
    $ativo = 'S';
}else{
    $ativo = 'N';
}

include("conexao.php");

if($opcao == 'I'){
    $sql = "INSERT produtos (descricao,quantidade,valor_unitario,flg_ativo) 
        VALUES('$descricao',$quantidade,$valor_unitario,'$ativo');";
}elseif($opcao == 'A'){
    $sql = "UPDATE produtos
            SET descricao = '$descricao',
                quantidade = $quantidade,
                valor_unitario = $valor_unitario,
                flg_ativo = '$ativo'
            WHERE id_produto=$id;";
}elseif($opcao == 'E'){
    $sql = "DELETE FROM produtos WHERE id_produto = $id;";
}
// var_dump($sql);
// die();

$result = mysqli_query($conn,$sql);

mysqli_close($conn);

header("location: ../produtos.php");
?>