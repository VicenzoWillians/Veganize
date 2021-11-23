<div id="addUsuarioModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUsuarioModal">Cadastrar Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" id="insert_form">
                <div class="modal-body">
                    <span id="msg-error"></span>
                    <div class="form-group row">
                        <div class="col-12">
                            <input type="text" name="nome_completo" class="form-control" id="nome_completo" placeholder="Nome Completo"/>
                        </div>
                        <div class="col-12">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome de Usuário" onchange="valida_Nome()"/>
                            <p id="erroNome" style="color: red;"></p>
                        </div>
                        <div class="col-12">
                            <input type="password" name="senha" class="form-control display" id="senha" placeholder="Senha" autocomplete="on"/>
                            <span><i id="showPassword" class="bi bi-eye showPassword"></i></span>
                        </div>
                        <div class="col-6">
                            <input type="number" name="idade" class="form-control" id="idade" placeholder="Idade" min="1"/>
                        </div>
                        <div class="col-6">
                            <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" onchange="valida_Email()"/>
                        </div>
                        <div class="col-12">
                            <p id="erroEmail" style="color:red;"></p>
                        </div>
                        <div class="col-12">
                            <select name="estado" id="estados" class="form-select">
                                <option value="0">Estado</option>
                                <?php
                                    include('inc/conexao.inc');

                                    $estados = "SELECT id, uf FROM estados";
                                    $query=mysqli_query($con, $estados);

                                    if($estados){
                                        if(mysqli_num_rows($query)>0){
                                            while(($resultado=mysqli_fetch_assoc($query))!=null){
                                                echo '<option value="' . $resultado['id'] . '">' . $resultado['uf'] . '</option>';
                                            }
                                        }
                                    } else{
                                        echo "Erro de Sintaxe SQL</br>";
                                        echo mysqli_error($con);
                                    }
                                        
                                    mysqli_close($con);
                                ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <select name="cidade" id="cidades" class="form-select" disabled>
                                <option value="">Cidade</option>
                        
                            </select>
                        </div>
                        <div class="col-12">
                            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone" onchange="valida_Tel()"/>
                            <p id="erroTel" style="color:red;"></p>
                        </div>
                    </div>
                    <input type="hidden" name="permissao" id="permissao" value="2"/>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="cadUser" id="cadUser" value="Cadastrar" class="btn btn-submit">
                </div>
            </form>
        </div>
    </div>
</div>