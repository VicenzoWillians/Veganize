<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sessão | VEGANIZE</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/logo.png">

    <!-- JavaScript -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form_script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</head>

<body>
    <!-- header -->
    <?php
            include 'inc/navbar.inc';
        ?>

    <div class="container veganize content-mobile">
        <div class="form">
            <div class="row">
                <div class="col-12 center-flex">
                    <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop" delay="2000"
                        colors="primary:#121331,secondary:#08a88a" style="width:250px;height:250px;">
                    </lord-icon>
                </div>
                <div class="col-12 center-flex">
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Nome de Usuário</label>
                            <input type="text" name="login" class="form-control" placeholder="Nome de Usuário"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" name="senha" class="form-control" placeholder="Senha" required
                                autocomplete="on" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="submit" value="Entrar" />
                        </div>
                    </form>
                </div>
                <div class="col-12 center-flex">
                    <?php
                            if(!empty($_POST)){
                                $login=$_POST["login"];
                                $password=$_POST["senha"];
                
                                $encryptPassword = base64_encode($password);
                
                                include('inc/conexao.inc');
                
                                $select = "SELECT permissao_usuario FROM dados_usuario WHERE nome_usuario = '$login'";
                                $permissao = mysqli_query($con, $select);
                                $array = mysqli_fetch_array($permissao);
                                $logarray = $array[0];
                
                                $valida = "SELECT * FROM dados_usuario WHERE nome_usuario = '$login' AND senha_usuario = '$encryptPassword'";
                                $verificar = mysqli_query($con, $valida);
                
                                if($verificar){
                                    if(mysqli_num_rows($verificar)<=0){
                                        echo '<div class="alert alert-danger center-flex"
                                        role="alert">Login e/ou senha incorretos
                                        </div>';
                                    } else{
                                        $_SESSION["nome"]="$login";
                
                                        if($logarray=="1"){
                                            header("Location:admin/administrador.php");
                                        } elseif($logarray=="2"){
                                            header("Location:index.php");
                                        } elseif($logarray=="3"){
                                            header("Location:mediator/mediador.php");
                                        }
                                    }
                                } else{
                                    echo mysqli_error($con);
                                }
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php
            include 'inc/cadastro.inc';
            include 'inc/template.inc';
            include 'inc/footer.inc';
        ?>
    <script src="js/script.js"></script>
</body>

</html>