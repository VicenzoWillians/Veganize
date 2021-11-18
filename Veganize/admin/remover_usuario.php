<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header('Location: ../index.php');
    } else {
        $session = $_SESSION['nome'];
        
        include('../inc/conexao.inc');

        $select = "SELECT permissao_usuario FROM dados_usuario WHERE nome_usuario = '$session'";
        $permissao = mysqli_query($con, $select);
        $array = mysqli_fetch_array($permissao);
        $logarray = $array[0];

        if($logarray === "2"){
            header('Location: ../index.php');
        } elseif($logarray === "3"){
            header('Location: ../mediator/mediador.php');
        }
    }
    
    $userName = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

    include('../inc/conexao.inc');

    echo "$userName";

    $SQL = "DELETE FROM dados_usuario WHERE nome_usuario = '$userName'";

    $query=mysqli_query($con, $SQL);
                
    if($query){
        echo true;
    } else{
        echo false;
        echo mysqli_error($con);
    }
    mysqli_close($con);

?>