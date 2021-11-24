<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganize | Doces e Sobremesas</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="images/logo.png">

        <!-- JavaScript -->
        <script src="js/jquery-3.5.1.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/form_script.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>
        <!-- header -->
        <?php
            include 'inc/navbar.inc';
        ?>

        <!-- Receitas e Dicas-->
        <div class="container veganize">
            <div class="row content-mobile justify-content-center">
                <div class="col-12 text-secondary text-center my-3">
                  <h1 id="o-movimento" style="color:#6C757D;">DOCES E SOBREMESAS</h1>
                </div>
                <hr class="divider">
                    <?php
                        include('inc/conexao.inc');

                        $consulta = "SELECT * FROM dados_receita where status_receita = '1' and categoria_receita = '25'";
                        $query=mysqli_query($con, $consulta);

                        if($consulta){
                            if(mysqli_num_rows($query)>0){
                                while(($resultado=mysqli_fetch_assoc($query))!=null){
                                    $consulta_nome = "SELECT * FROM dados_usuario";
                                    $query_nome=mysqli_query($con, $consulta_nome);

                                    echo '<div class="col-6 mb-3">
                                            <div class="card mb-3">
                                                <div class="card-horizontal">
                                                    <div class="img-square-wrapper">
                                                        <img src="images/categories/sweets.jpg" class="card-img img-horizontal" alt="Doces e Sobremesas">
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-12 center-flex my-4">
                                                            <h6 class="card-title" style="color:#6C757D;">' . $resultado['nome_receita'] . '</h6>
                                                        </div>
                                                        <div class="col-12 center-flex my-4">
                                                            <h4 class="card-text" style="text-align:center;">Feito por ';
                                                            if($consulta_nome){
                                                                while(($resultado_nome=mysqli_fetch_assoc($query_nome))!=null){
                                                                    if($resultado['nome']==$resultado_nome['nome_usuario']){
                                                                        echo '' . $resultado_nome['nome_completo'] . '';
                                                                    }
                                                                }
                                                            }
                                                            echo '</h4>
                                                        </div>
                                                        <div class="col-12 center-flex my-4">
                                                            <a href="recipe_view.php?id=' . $resultado['id_receita'] .'&usuario=' . $resultado['nome'] . '" class="btn btn-contact btn-primary">
                                                                Ver Receita
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                }
                            } else{
                                echo '<div class="col-12 center-flex">
                                <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
                                <lord-icon
                                    src="https://cdn.lordicon.com/tyounuzx.json"
                                    trigger="loop"
                                    delay="5000"
                                    colors="primary:#121331,secondary:#08a88a"
                                    style="width:250px;height:250px">
                                </lord-icon></div>';
                                echo "<h4 style='text-align:center;'>Poxa, parece que não há receitas desse tipo disponiveis no momento :(</h4>
                                    <h6 style='text-align:center;'>Seja o primeiro e envie sua receita.</h6>";
                            }
                        } else{
                            echo "Erro de Sintaxe SQL<br/>";
                            echo mysqli_error($con);
                        }
                    ?>
            </div>
        </div>
                
        <!-- Footer -->
        <?php
            include 'inc/receitas.inc';
            include 'inc/template.inc';
            include 'inc/cadastro.inc';
            include 'inc/footer.inc';
        ?>
        <script src="js/script.js"></script>
    </body>
</html>