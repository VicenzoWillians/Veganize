<?php
    session_start();

    $nome = filter_input(INPUT_POST, 'nome_receita', FILTER_SANITIZE_STRING);
    $tempo = filter_input(INPUT_POST, 'tempo_preparar', FILTER_SANITIZE_STRING);
    $porcoes = filter_input(INPUT_POST, 'porcao', FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria_receita', FILTER_SANITIZE_NUMBER_INT);
    $modo = filter_input(INPUT_POST, 'modo_preparar', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status_receita', FILTER_SANITIZE_NUMBER_INT);
    $cont = filter_input(INPUT_POST, 'cont', FILTER_SANITIZE_NUMBER_INT);

    if($cont === null){
        $cont = 1;
    }

    include('inc/conexao.inc');

    $nomeU = $_SESSION["nome"];

    $SQL = "INSERT INTO dados_receita (status_receita, categoria_receita, nome_receita, nome, tempo_preparo, qnt_porcoes, modo_preparo)
    VALUES ('$status', '$categoria', '$nome', '$nomeU', '$tempo', '$porcoes', '$modo')";

    $query=mysqli_query($con, $SQL);

    $select = "SELECT max(id_receita) FROM dados_receita";
    $verificar = mysqli_query($con, $select);

    $array = mysqli_fetch_array($verificar);
    $logarray = $array[0];

    for($i=1; $i<=$cont; $i++){
        $qntI = filter_input(INPUT_POST, 'qnt_ingrediente'. $i .'', FILTER_SANITIZE_STRING);
        $medI = filter_input(INPUT_POST, 'medida_ingrediente'. $i .'', FILTER_SANITIZE_NUMBER_INT);
        $nomeI = filter_input(INPUT_POST, 'nome_ingrediente'. $i .'', FILTER_SANITIZE_STRING);

        $SQL = "UPDATE dados_receita SET ingrediente$i = '$nomeI', unidade$i = '$medI', quantidade$i = '$qntI'
        WHERE id_receita = '$logarray' ";

        $query=mysqli_query($con, $SQL);
    }

    if($query){
        mysqli_close($con);

        echo true;
    } else{
        mysqli_close($con);
        echo false;
    }  
?>

