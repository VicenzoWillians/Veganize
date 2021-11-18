<?php
    $telefoneUsuario = $_POST['telefone'];

    include('inc/conexao.inc');

    $select = "SELECT telefone_usuario FROM dados_usuario WHERE telefone_usuario = '$telefoneUsuario'";
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