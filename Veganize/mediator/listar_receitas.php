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
        } elseif($logarray === "1"){
            header('Location: ../admin/administrador.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veganize | Mediador</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/admin_mediator.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/logo.png">

    <!-- JavaScript -->
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/mediator.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
            include '../inc/navbar_mediator.inc';
        ?>
    <div class='container mt recipe-content'>
        <h2 class="center-flex">RECEITAS DOS USUÁRIOS</h2>
        <?php
                include('../inc/conexao.inc');

                $consulta = "SELECT * FROM dados_receita where status_receita = '0'";
                $query=mysqli_query($con, $consulta);

                    if($consulta){
                        if(mysqli_num_rows($query)>0){
                            include('../inc/tabela_receita.inc');
                            while(($resultado=mysqli_fetch_assoc($query))!=null){
                                echo '<tr>
                                <td>' . $resultado['id_receita'] . '</td>
                                <td>' . $resultado['nome'] . '</td>
                                <td>' . $resultado['nome_receita'] . '</td>';

                                $consulta_categoria = "SELECT * FROM categorias";
                                $query_categoria=mysqli_query($con, $consulta_categoria);
                                if($consulta_categoria){
                                    while(($resultado_categoria=mysqli_fetch_assoc($query_categoria))!=null){
                                        if($resultado['categoria_receita']==$resultado_categoria['id_categoria']){
                                            echo '<td>' . utf8_encode($resultado_categoria['nome_categoria']) . '</td>';
                                        }
                                    }
                                }

                                echo '<td>' . $resultado['tempo_preparo'] . '</td>
                                <td>' . $resultado['qnt_porcoes'] . '</td>';

                                for($i=1; $i<=20; $i++){
                                    if($resultado["ingrediente$i"]!==null || $resultado["unidade$i"]!==null || $resultado["quantidade$i"]!==null){
                                        echo '<td>' . $resultado["ingrediente$i"] . '</td>';
                                        
                                        $consulta_unidade = "SELECT * FROM unidades_medidas";
                                        $query_unidade=mysqli_query($con, $consulta_unidade);
                                        if($consulta_unidade){
                                            while(($resultado_unidade=mysqli_fetch_assoc($query_unidade))!=null){
                                                if($resultado["unidade$i"]==$resultado_unidade['id_unidade']){
                                                    echo '<td>' . utf8_encode($resultado_unidade['nome_unidade']) . '</td>';
                                                }
                                            }
                                        }
                                        echo '<td>' . $resultado["quantidade$i"] . '</td>';
                                    
                                    } else{
                                        echo "<td>Não informado</td>
                                        <td>Não informado</td>
                                        <td>Não informado</td>";
                                    }
                                }

                                echo '<td>' . $resultado['modo_preparo'] . '</td>';

                                $recipeAction = '"'.$resultado["id_receita"].'"';
                                echo "<td> <a href='javascript:;' onclick='approveRecipe($recipeAction)'> Aprovar </a></td>";
                                echo "<td> <a href='javascript:;' onclick='disapproveRecipe($recipeAction)'> Reprovar </a></td>";
                            }

                            include('../inc/fim_tabela.inc');
                        } else{
                            echo "<h4 class='center-flex'>Nenhum usuário cadastrou uma receita</h4>";
                        }
                    } else{
                        echo "Erro de Sintaxe SQL<br/>";
                        echo mysqli_error($con);
                    }
                ?>
    </div>
</body>

</html>