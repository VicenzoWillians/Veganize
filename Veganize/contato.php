<?php
    session_start();

    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    include('inc/conexao.inc');

    $nome=$_SESSION["nome"];

    $SQL = "INSERT INTO contato (assunto, mensagem, nome_usuario)
    VALUES ('$assunto', '$mensagem', '$nome')";
                            
    $query=mysqli_query($con, $SQL);
                
    if($query){
        mysqli_close($con);

        echo true;
    } else{
        echo mysqli_error($con);
        mysqli_close($con);
        echo false;
    }
    
?>