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
        <title>Veganize | Administrador</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="../css/admin_mediator.css" media="screen"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="../images/logo.png">

        <!-- JavaScript -->
        <script src="../js/jquery-3.5.1.js"></script>
        <script src="../js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php
            include '../inc/navbar_admin.inc';
        ?>
        <div class='container mt'>
            <div class='card'>
                <div class='card-header'>
                    <?php echo '<h2 style="text-transform: capitalize;">Bem-Vindo(a) ' .$_SESSION["nome"]. '</h2>' ?>
                </div>
                <div class='card-body'>
                    <p>Esse tipo de conta é: Administrator</p>
                </div>
            </div>
        </div>
    </body>
</html>