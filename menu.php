<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <style>
            body{
                margin: 0;
                display: flex;
                flex-direction: column;
                /* padding: 50px; */
            }
            h5{
                border: 2px solid black;
                border-radius: 5px;
                font-size: large;
                width: fit-content;
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 30px;
                padding: 30px;
                margin: 20vh auto;
            }
            a{
                cursor: pointer;
                text-decoration: none;
                color: black;
                border: 2px solid black;
                border-radius: 8px;
                padding: 5px;
                line-height: 20px;
                width: 80px;
                font-size: 16px;
                text-align: center;
                transition: 1000ms;
            }
            a:hover{
                font-size: 20px;
                background-color: purple;
            }

        </style>
    </head>
    <body>
        <h5>
            <?php if($_SESSION['tipo_usuario'] == 1){?>
            
                <a href="usuarios.php">Usuários</a>
                
            <?php }?>
            <a href="produtos.php">Produtos</a>
            
            <a href="index.php">Sair</a>
        </h5>
    </body>
</html>