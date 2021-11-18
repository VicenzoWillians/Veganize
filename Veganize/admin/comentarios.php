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
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veganize | Listar Usuarios</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/admin_mediator.css" media="screen" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="shortcut icon" href="../images/logo.png">

    <!-- JavaScript -->
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/admin.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
            include '../inc/navbar_admin.inc';
        ?>
    <div class='container mt'>
        <h2 class="center-flex">COMENTÁRIOS DOS USUÁRIOS</h2>
        <?php
                    include('../inc/conexao.inc');

                    $consulta = "SELECT * FROM contato";
                    $query=mysqli_query($con, $consulta);

                    if($consulta){
                        if(mysqli_num_rows($query)>0){
                            include('../inc/tabela_contato.inc');
                            while(($resultado=mysqli_fetch_assoc($query))!=null){
                                echo '<tr>
                                <td>' . $resultado['id_contato'] . '</td>
                                <td>' . $resultado['assunto'] . '</td>
                                <td>' . $resultado['mensagem'] . '</td>
                                <td>' . $resultado['nome_usuario'] . '</td>';
                            }

                            include('../inc/fim_tabela.inc');
                        } else{
                            echo "<h4 class='center-flex'>Nenhum usuário entrou em contato</h4>";
                        }
                    } else{
                        echo "Erro de Sintaxe SQL<br/>";
                        echo mysqli_error($con);
                    }
                ?>
    </div>
</body>

</html>