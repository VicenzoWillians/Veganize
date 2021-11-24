<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganize | Receita</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="images/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                    <?php
                        $id = $_GET['id'];
                        include('inc/conexao.inc');

                        $consulta = "SELECT * FROM dados_receita where id_receita = '$id'";
                        $query=mysqli_query($con, $consulta);

                        if($consulta){
                            if(mysqli_num_rows($query)>0){
                                while(($resultado=mysqli_fetch_assoc($query))!=null){
                                    $consulta_nome = "SELECT * FROM dados_usuario";
                                    $query_nome=mysqli_query($con, $consulta_nome);

                                    $consulta_categoria = "SELECT * FROM categorias";
                                    $query_categoria=mysqli_query($con, $consulta_categoria);

                                    echo '<div class="card col-12 text-center my-3">
                                        <h1 id="o-movimento" style="color: black;" class="card-header">' . $resultado['nome_receita'] . '</h1>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <i class="fas fa-tags fa-lg"></i>
                                                    <h5 class="card-title my-2">Categoria</h5>
                                                    <p class="card-text my-2">';    
                                                        if($consulta_categoria){
                                                            while(($resultado_categoria=mysqli_fetch_assoc($query_categoria))!=null){
                                                                if($resultado['categoria_receita']==$resultado_categoria['id_categoria']){
                                                                    echo '' . utf8_encode($resultado_categoria['nome_categoria']) . '';
                                                                }
                                                            }
                                                        }
                                                    echo '</p>
                                                </div>
                                                <div class="col-3 vl">
                                                    <i class="fas fa-concierge-bell fa-lg"></i>
                                                    <h5 class="card-title my-2">Rendimento</h5>
                                                    <p class="card-text my-2">' . $resultado['qnt_porcoes'] .' Porções</p>
                                                </div>
                                                <div class="col-3 vl">
                                                    <i class="fas fa-stopwatch fa-lg"></i>
                                                    <h5 class="card-title my-2">Preparo</h5>
                                                    <p class="card-text my-2">' . $resultado['tempo_preparo'] . ' Minutos</p>
                                                </div>
                                                <div class="col-3 vl">
                                                    <i class="fas fa-user fa-lg"></i>
                                                    <h5 class="card-title my-2">Enviada por</h5>
                                                    <p class="card-text my-2">';
                                                        if($consulta_nome){
                                                            while(($resultado_nome=mysqli_fetch_assoc($query_nome))!=null){
                                                                echo '(' . $resultado['nome'] . ') e (' . $resultado_nome['nome_completo'] . ')</br>';
                                                                if($resultado['nome']==$resultado_nome['nome_usuario']){
                                                                    echo '' . $resultado_nome['nome_completo'] . '';
                                                                }
                                                            }
                                                        }
                                                    echo '</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card col-12 text-center my-3">
                                        <div class="row">
                                            <div class="col">
                                                <h1 id="o-movimento" style="color: black;" class="card-header"><i class="fas fa-pepper-hot" style="margin-right: 10px;"></i>Ingredientes</h1>
                                            </div>
                                        </div>
                                        <div class="card-body">';
                                            for($i=1; $i<=20; $i++){
                                                if($resultado["ingrediente$i"]!==null && $resultado["unidade$i"]!==null && $resultado["quantidade$i"]!==null){
                                                    echo '<p>' . $resultado["quantidade$i"] . ' ';
                                                    
                                                    $consulta_unidade = "SELECT * FROM unidades_medidas";
                                                    $query_unidade=mysqli_query($con, $consulta_unidade);
                                                    if($consulta_unidade){
                                                        while(($resultado_unidade=mysqli_fetch_assoc($query_unidade))!=null){
                                                            if($resultado["unidade$i"]==$resultado_unidade['id_unidade']){
                                                                echo '' . utf8_encode($resultado_unidade['nome_unidade']) . '(s) de ';
                                                            }
                                                        }
                                                    }
                                                    echo '' . $resultado["ingrediente$i"] . '</p>';
                                                
                                                }
                                            }
                                        echo '</div>
                                    </div>
                                    <div class="card col-12 text-center my-3">
                                        <div class="row">
                                            <div class="col">
                                                <h1 id="o-movimento" style="color: black;" class="card-header"><i class="fas fa-blender" style="margin-right: 10px;"></i>Modo de Preparo</h1>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>' . $resultado['modo_preparo'] . '</p>
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
                                echo "<h4 style='text-align:center;'>Oops... Ocorreu um erro e algo inesperado aconteceu.</h4>
                                    <h6 style='text-align:center;'>Tente Novamente mais tarde.</h6>";
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