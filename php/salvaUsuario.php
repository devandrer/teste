<?php
$nome = $_POST['nNome'];
$tipo = $_POST['nTipo'];
$login = $_POST['nLogin'];
$data = $_POST['nData'];
$senha = $_POST['nSenha'];
$foto = $_FILES['nFoto'];
$opcao = $_GET['opcao'];
$id = $_GET['id'];

include('funcoes.php');

// var_dump(proximoID('usuario','id_usuario'));
// die();

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
    $id = proximoID('usuario','id_usuario');

    $sql = "INSERT INTO usuario (id_usuario,id_tipo_usuario,nome,login,senha,data_nasc,flg_ativo) 
        VALUES($id,$tipo,'$nome','$login',md5('$senha'),'$data','$ativo');";
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

//IMAGEM
if($_FILES['nFoto']['tmp_name'] != ""){
    //GRAVA A EXTENSÃO DO ARQUIVO
    $extensao = pathinfo($_FILES['nFoto']['name'], PATHINFO_EXTENSION);

//NOVO NOME DO ARQUIVO
    $novoNome = md5($_FILES['nFoto']['name']).'.'.$extensao;

//VERIFICAR SE O DIRETORIO EXISTE, OU CRIAR A PASTA
if(is_dir('../img/')){
    //EXISTE
    $diretorio = '../img/';
}else{
    //CRIAR PQ NÃO EXISTE
    $diretorio = mkdir('../img/');
}

//CRIAR UMA COPIA DO ARQUIVO LOCAL NA PASTA DO PROJETO
move_uploaded_file($_FILES['nFoto']['tmp_name'], $diretorio.$novoNome);

//CAMINHO QUE SERÁ SALVO NO BANCO DE DADOS
$dirImagem = 'img/'.$novoNome;

include('conexao.php');
$sql = "UPDATE usuario
        SET foto = '".$dirImagem."'
        WHERE id_usuario = $id;";

$result = mysqli_query($conn,$sql);
mysqli_close($conn);


}
header("location: ../usuarios.php");
?>