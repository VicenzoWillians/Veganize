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

        <!-- Sections -->
        <div class="veganize">
            <div class="container">
                <h2 style="text-transform:uppercase; letter-spacing: 0.2rem">Sobre a Veganize</h2>
                <hr>
                <p style="text-align: justify; font-size: 1.1em; margin-bottom: 50px;">
                    Formado por um grupo de estudantes, a Veganize surgiu como um Trabalho de Conclusão de Curso (TCC).
                    Temos como nosso objetivo ajudar as pessoas que buscam uma mudança de vida através da ideologia vegana. 
                    Nos últimos anos, com a crescente demanda de adeptos aos movimentos contra o consumo de produtos de origem
                    animal, percebemos que algumas pessoas sentiam falta e tinham dificuldades de obter informações. Desse modo, 
                    nós da Veganize decidimos desenvolver este site para atender a carência e a demanda de informações sobre o 
                    movimento, mais especificamente na cidade de Araraquara.
                </p>

                <h5 style="color: #7FE5D4; text-transform:uppercase; letter-spacing: 0.2rem">Informações que você encontra aqui</h5>
                <hr>
                <p style="text-align: justify; font-size: 1.1em; margin-bottom: 50px;">
                    A paixão pelos animais e a busca pela defesa e liberdade deles é o que nos motiva, cada vez mais, a trazer
                    o melhor conteúdo possível, inovando e atualizando a cada dia. A história do movimento, o que é, a ideologia
                    seguida, subcategorias do movimento vegetariano, as diferenças entre os grupos, espaços que possuem produtos
                    que seguem o movimento em Araraquara, dicas e receitas publicas pelos nossos usuários são as informações que
                    você pode encontrar em nosso site.
                </p>

                <h5 style="color: #7FE5D4; text-transform:uppercase; letter-spacing: 0.2rem">Objetivos futuros</h5>
                <hr>
                <p style="text-align: justify; font-size: 1.1em;">
                    Somos um pequeno grupo de estudantes, totalmente independentes e sem apoio financeiro. Portanto, visamos 
                    desenvolver nossos projetos em um longo período de tempo. Assim sendo, temos como metas adicionar novos 
                    conteúdos, aumentar nossa diversidade de informações, expandir nosso serviço de localização geográfica
                    para regiões vizinhas e adicionar uma rede de notícias, para que nossos usuários possam se manter sempre
                    atualizados, ajudando, assim, essa comunidade que vem crescendo cada vez mais.
                </p>
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