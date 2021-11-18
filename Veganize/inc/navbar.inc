<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                VEGANIZE
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#movimento">O Veganismo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#espacos">Espaços em Araraquara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="receitas.php">Receitas e Dicas</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex">
                    <?php
                        if(isset($_SESSION["nome"])){
                            echo '
                            <li class="nav-item">
                                <span class="nav-link text-capitalize"><i class="bi bi-person"></i>' . $_SESSION["nome"] . '</span>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i class="bi bi-door-open"></i>Sair</a>
                            </li>';
                        } else{
                            echo '
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                             <li class="nav-item">
                                <button type="button" class="btn nav-link" data-bs-toggle="modal" data-bs-target="#addUsuarioModal">Cadastre-se</button>
                            </li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>