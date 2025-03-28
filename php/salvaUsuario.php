<?php
$nome = $_POST['nNome'];
$tipo = $_POST['nTipo'];
$login = $_POST['nLogin'];
$data = $_POST['nData'];
$senha = $_POST['nSenha'];
//$ativo = $_POST['nAtivo'];
$opcao = $_GET['opcao'];
$id = $_GET['id'];

$setSenha = '';

if($senha != ''){
    $setSenha = "senha = md5('$senha'),";
}


if($_POST['nAtivo'] == 'on'){
    $ativo = 'S';
}else{
    $ativo = 'N';
}

include("conexao.php");

if($opcao == 'I'){
    $sql = "INSERT INTO usuario (id_tipo_usuario,nome,login,senha,data_nasc,flg_ativo) 
        VALUES($tipo,'$nome','$login',md5('$senha'),'$data','$ativo');";
}elseif($opcao == 'A'){
    $sql = "UPDATE usuario
            SET nome = '$nome',
                login = '$login',
                id_tipo_usuario = $tipo,
                $setSenha
                data_nasc = '$data',
                flg_ativo = '$ativo'
            WHERE id_usuario='$id';";
}elseif($opcao == 'E'){
    $sql = "DELETE FROM usuario WHERE id_usuario = $id;";
}



$result = mysqli_query($conn,$sql);

mysqli_close($conn);

header("location: ../usuarios.php");
?>