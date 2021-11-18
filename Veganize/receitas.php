<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Veganize | Home</title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
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
        <div class="container veganize" data-aos="fade-up" data-aos-duration="1000">
            <div class="row content-mobile justify-content-center" date-aos="fade-up">
                <div class="col-12 text-secondary text-center my-3">
                  <h1 id="o-movimento" style="color:#6C757D;">RECEITAS E DICAS</h1>
                </div>
                <hr class="divider">
                <div class="col-4 my-3">
                    <a href="recipes/drinks.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/bebidas.jpg" class="card-img" alt="Bebidas">
                            <div class="card-img-overlay center-flex">
                                Bebidas
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/cakes.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/bolos.jpg" class="card-img" alt="Bolos e Tortas">
                            <div class="card-img-overlay center-flex">
                                Bolos
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/sweets.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/sobremesas.jpg" class="card-img" alt="Doces e Sobremesas">
                            <div class="card-img-overlay center-flex">
                                Doces
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/snack.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/lanches.jpg" class="card-img" alt="Bebidas">
                            <div class="card-img-overlay center-flex">
                                Lanches
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/pastas.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/massas.jpg" class="card-img" alt="Bolos e Tortas">
                            <div class="card-img-overlay center-flex">
                                Massas
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/breads.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/paes.jpg" class="card-img" alt="Doces e Sobremesas">
                            <div class="card-img-overlay center-flex">
                                Pães
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/salads.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/saladas.jpg" class="card-img" alt="Bolos e Tortas">
                            <div class="card-img-overlay center-flex">
                                Saladas
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 my-3">
                    <a href="recipes/soups.php">
                        <div class="card card-transform text-white">
                            <img src="images/cards/sopas.jpg" class="card-img" alt="Doces e Sobremesas">
                            <div class="card-img-overlay center-flex">
                                Sopas
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 center-flex">
                    <p class="text-recipe" style="color:#6C757D;">Envie sua própria receita</p>
                </div>
                <div class="col-12 center-flex">
                    <button type="button" id="botaor" class="btn btn-contact btn-primary"
                    onclick="verificaSessao('receita')">
                        Enviar Receita
                    </button>
                </div>
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
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init({
            duration: 1000,
          });
        </script>
    </body>
</html>