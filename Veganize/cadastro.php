<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $nomeC = filter_input(INPUT_POST, 'nome_completo', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $permissao = filter_input(INPUT_POST, 'permissao', FILTER_SANITIZE_STRING);
            
    include('inc/conexao.inc');
            
    $select = "SELECT nome_usuario FROM dados_usuario WHERE nome_usuario = '$nome'";
    $verificar = mysqli_query($con, $select);

    $array = mysqli_fetch_array($verificar);
    $logarray = $array[0];

    $encryptPassaword = base64_encode($password);

    if($logarray == $nome){
        echo false;
        
    } else{
        $select = "SELECT telefone_usuario FROM dados_usuario WHERE telefone_usuario = '$telefone'";
        $verificar = mysqli_query($con, $select);
                    
        $array = mysqli_fetch_array($verificar);
        $logarray = $array[0];

        if($logarray == $telefone){
            echo false;

        } else{
            $select = "SELECT email_usuario FROM dados_usuario WHERE email_usuario = '$email'";
            $verificar = mysqli_query($con, $select);
                        
            $array = mysqli_fetch_array($verificar);
            $logarray = $array[0];

            if($logarray == $email){
                echo false;

            } else{
                $SQL = "INSERT INTO dados_usuario (nome_usuario, nome_completo, senha_usuario, telefone_usuario, email_usuario, idade_usuario, id_cidade, id_estado, permissao_usuario)
                VALUES ('$nome', '$nomeC', '$encryptPassaword', '$telefone', '$email', '$idade', '$cidade', '$estado', '$permissao')";
                            
                $query=mysqli_query($con, $SQL);
                
                if($query){
                    echo true;
                } else{
                    echo false;
                    echo mysqli_error($con);
                }
                mysqli_close($con);
            }
        }
    }

    
?>