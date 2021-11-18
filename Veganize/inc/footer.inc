<button id="myBtn" title="Go to top" onclick="topFunction()"><i class="bi bi-arrow-up"></i></button>
<div class="footer-color">
    <div class="container content-mobile">
        <footer class="footer py-5">
            <div class="row justify-content-around">
                <div class="col">
                    <h5>Veganize</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <a href="index.php" class="nav-link p-0 text-muted">Home</a>
                        </li>
                         <li class="nav-item mb-3">
                            <a href="index.php#movimento" class="nav-link p-0 text-muted">O Veganismo</a>
                        </li>
                         <li class="nav-item mb-3">
                            <a href="receitas.php" class="nav-link p-0 text-muted">Receitas e Dicas</a>
                        </li>
                        <li class="nav-item mb-3">
                            <a href="index.php#espacos" class="nav-link p-0 text-muted">Espaços em Araraquara</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <form>
                        <h1>Entre em contato</h1>
                        <p>Em caso de dúvidas e violações nos deixe uma mensagem ou contate: veganizesupport@gmail.com</p>
                        <div class="d-flex w-100 gap-2">
                            <button type="button" id="botaoc" class="btn btn-footer"
                            onclick="verificaSessao('contato')">
                                Entre em Contato
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="footer-2 d-flex justify-content-between py-4 my-4 border-top">
                    <p>© 2021 <a href="quem_somos.php">Veganize</a>. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-light" href="#"><i class="bi bi-twitter"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="bi bi-instagram"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="bi bi-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>

<div id="contatoModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contatoModal">Entre em Contato Conosco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span id="msg-error-cont"></span>
                <form method="POST" id="form_contato">
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Assunto</label>
                        
                        <div class="col-sm-12">
                            <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-form-label">Sua Mensagem</label>
                        
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="3" placeholder="Escreva uma mensagem até 1000 caracteres" name="mensagem" id="mensagem" maxlength="999"></textarea>
                        </div>
                    </div>

                <div class="modal-footer">
                    <input type="submit" name="sendMsg" id="sendMsg" value="Enviar" class="btn btn-submit">
                </div>
            </form>
        </div>
    </div>
</div>
