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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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
      
      <!-- content -->
      <div class="container veganize">
        <div id="slider">
          <div class="row justify-content-between content-mobile">
            <div class="col align-self-center">
              <p class="h2">OS MELHORES LUGARES DE ARARAQUARA</p>
              <h4 class="mb-4">Você encontra aqui no Veganize.</h4>
              <a href="quem_somos.php" class="btn btn-contact btn-primary">Saiba Mais</a>
              <button type="button" id="botaoc" class="btn btn-contact button-primary-outline" 
                onclick="verificaSessao('contato')">
                Contato
              </button>
            </div>
            <div class="col align-self-center smartphone">
              <img src="images/home/home.png" class="img-fluid" alt="Responsive image"/>
            </div>
          </div>
        </div>
      </div>

      <!-- information -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      <div class="bg-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <span id="movimento"></span>
        <div class="container">
          <div class="row content-mobile">
            <div class="col text-center smartphone align-self-center">
              <img src="images/home/vaca.png" class="img-fluid" width="450px">
            </div>
            <div class="col text-secondary text-right align-self-center">
                <h1 id="o-movimento">O QUE É O MOVIMENTO VEGANO?</h1>
                <p id="conteudo-texto" class="texto-dark">O termo vegan (traduzido para o português como vegano) foi elaborado pelo britânico Donald Watson em 1944. Desde então, tornou-se não só um estilo de vida, mas também um movimento político e moral, que tem ganhado cada vez mais adeptos desde as revoluções contraculturais de 1960. O veganismo procura excluir todas as formas de exploração animal, seja na alimentação, no vestuário ou em qualquer outra finalidade.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row content-mobile">
          <div class="col text-secondary text-right align-self-center">
            <p id="conteudo-texto">Embora a definição de veganismo estivesse no início da The Vegan Society em 1944, foi somente em 1949 que Leslie J. Cross apontou que faltava à sociedade uma definição de veganismo. Ele propôs "o princípio de libertar os animais da exploração da humanidade". Posteriormente, foi esclarecido como "buscar acabar com o uso de animais pelos humanos para alimentação, mercadorias, trabalho, caça, biópsia e todos os outros fins que envolvam a exploração humana da vida animal". A associação foi registrada pela primeira vez como uma instituição de caridade em agosto de 1964, mas quando se tornou uma sociedade anônima em dezembro de 1979, seus ativos foram transferidos para uma nova instituição de caridade. A definição de vegetarianismo e caridade mudou e melhorou nos últimos anos. No inverno de 1988, a definição atual foi usada - embora a frase tenha mudado ligeiramente nos últimos anos.</p>
          </div>
          <div class="col text-center smartphone align-self-center">
            <img src="images/home/galinha.png" class="img-fluid" width="450px">
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      <div class="bg-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <span id="movimento"></span>
        <div class="container">
          <div class="row content-mobile">
            <div class="col text-center smartphone align-self-center">
              <img src="images/home/coelho.png" class="img-fluid" width="450px">
            </div>
            <div class="col text-secondary text-right align-self-center">
                <h1 id="o-movimento">A IDEOLOGIA</h1>
                <p id="conteudo-texto" class="texto-dark">A ideologia dos vegetarianos inclui a preservação e a defesa da liberdade dos animais. O termo vegano foi cunhado em 1944 por um grupo de pessoas em Londres, incluindo o britânico Donald Watson, que rompeu com o movimento The Vegetarian Society (A Sociedade Vegetariana) e fundou a The Vegan Society (A Sociedade Vegana) por razões ideológicas.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row content-mobile">
          <div class="col text-secondary text-right align-self-center">
            <h1 id="o-movimento" style="color:#6C757D;">O MOVIMENTO</h1>
            <p id="conteudo-texto">
              De uma forma mais ampla, além do veganismo, o movimento vegetariano contém várias subcategorias que abrangem diferentes particularidades. Entretanto, todas elas têm em comum uma dieta baseada em verduras, legumes, frutas, legumes e verduras, reduzindo o consumo de carnes no dia a dia. As restrições variam-se de carne a alimentos e ingredientes que contém origem animal.  
              Por exemplo, vegetarianos estritos só podem comer alimentos sem origem animal. Veganos são a categoria que não consome nenhum produto de exploração animal. Isso inclui não apenas alimentos, mas também roupas, cosméticos, produtos de limpeza, etc. 
              No entanto, diante as diversas variantes desse movimento. Há pessoas que consomem alguns alimentos de origem animal, como derivados do leite (chamados Lactovegetarianos) e os que também consomem ovos (ovolactovegetariano).
            </p>
          </div>
          <div class="col text-center smartphone align-self-center">
            <img src="images/home/cozinha.png" class="img-fluid" width="450px">
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      <div class="bg-black">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        <span id="movimento"></span>
        <div class="container">
          <div class="row content-mobile">
            <div class="col text-center smartphone align-self-center">
              <img src="images/home/ralph.png" class="img-fluid" width="450px">
            </div>
            <div class="col text-secondary text-right align-self-center">
                <h1 id="o-movimento">SAVE RALPH</h1>
                <p id="conteudo-texto" class="texto-dark">Curta-metragem de animação mocumentário em stop motion escrito e dirigido por Spencer Susser. Produzido por Jeff Vespa, o curta-metragem de 4 minutos foi lançado pela Humane Society International em 6 de abril de 2021, com aclamação da crítica. A campanha “Save the Ralph” vem ganhando força, sobretudo, nas redes sociais. A animação mostra um coelho sendo explorado pelas indústrias de cosméticos. A campanha pede o fim dos testes em animais e pressiona marcas que ainda usam este meio.</p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
      <div class="container">
        <div class="row content-mobile">
          <div class="col text-secondary text-right align-self-center">
            <h1 id="o-movimento" style="color:#6C757D;">TESTES E EXPERIMENTOS</h1>
            <p id="conteudo-texto">
              Durante muitos anos, animais são usados em laboratórios pelo mundo para testar cosméticos, alimentos e medicamentos. 
              Para “garantir” que esses produtos não façam mal a nós quando chegarem ao consumo. Porem, nesse processo, são os bichos que sentem os efeitos colaterais das substâncias em experimento. No passado, não existiam ferramentas e os animais se tornaram uma forma para testar a segurança das coisas. Mas, hoje, já existem muitas outras estratégias para estudar e observar algumas substâncias, e em alguns casos os bichos podem ser substituídos por pele artificial ou até mesmo, graças à tecnologia,  simulação em computador.
            </p>
          </div>
          <div class="col text-center smartphone align-self-center">
            <img src="images/home/cobaia.png" class="img-fluid" width="450px">
          </div>
        </div>
      </div>

      <!-- map -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="1 0 1440 200"><path fill="#00cba9" fill-opacity="1" d="M0,192L48,181.3C96,171,192,149,288,128C384,107,480,85,576,90.7C672,96,768,128,864,138.7C960,149,1056,139,1152,133.3C1248,128,1344,128,1392,128L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
      <div class="bg-green">
        <div class="container">
          <div class="row content-mobile text-center">
            <h3 id="espacos" class="title-green">ESPAÇOS EM ARARAQUARA</h3>
          </div>
          <hr class="divider" style="color:white; height: 3px">
          <div class="map align-self-center">
            <iframe src="https://www.google.com/maps/d/embed?mid=1Suvi8IPOmLnhoNMA1jv2RwzG1-gqysYB&hl=pt-BR" 
              width="600" height="480" frameborder="0" allowfullscreen>
            </iframe>
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