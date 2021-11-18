<?php
    $nomeUsuario = $_POST['nome'];

    include('inc/conexao.inc');

    $select = "SELECT nome_usuario FROM dados_usuario WHERE nome_usuario = '$nomeUsuario'";
    $verificar = mysqli_query($con, $select);

    $array = mysqli_fetch_array($verificar);
    $logarray = $array[0];

    if($logarray==NULL){
        echo 0;  
        mysqli_close($con);

    } else{
        echo 1;
        mysqli_close($con);
    }
    
?>