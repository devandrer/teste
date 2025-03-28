<?php
    include("funcaoUsuario.php");   
    include("funcaoProdutos.php");
    include("funcaoTipoUsuario.php");
    
function descrFlag($flag){
    if($flag == 'S'){
        return 'Sim';
    }else{
        return 'Não';
    }
}



?>