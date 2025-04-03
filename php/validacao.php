<?php

use LDAP\Result;

    session_start();


    //dados do form
    $email = $_POST["nEmail"];
    $senha = $_POST["nSenha"];

    //conexão ao BD
    include("conexao.php");

    // var_dump($conn);
    // die();
    //Abrir a conexão
    //ok
    //Executar SQL
    $sql = "SELECT * FROM usuario 
            WHERE login = '".$email."'
            AND flg_ativo = 'S'
            AND senha = md5('".$senha."');";
            
    // var_dump($sql);
    // die();        
    $result = mysqli_query($conn,$sql);

    // var_dump($result);
    // die();
    // //Fechar a conexão
    mysqli_close($conn);

    //Validar o retorno
    if(mysqli_num_rows($result) >0){
        foreach($result as $campo){
            $_SESSION['tipo_usuario'] = $campo['id_tipo_usuario'];
        }
        header("location: ../menu.php");
    }else{
        var_dump("Acesso NEGADO");
    }

    // var_dump($email." ----- ".$senha);
    // die();
?>

<!-- 
localhost:808/phpmyadmin/

host: "localhost"
banco: "teste123"
usuario: "root"
senha; "" -->
