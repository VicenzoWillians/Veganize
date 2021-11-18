<div class="modal fade" id="receitasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog container-fluid" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="receitasModal">Enviar Receita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" id="formulario_receita">
                        <div class="modal-body">
                            <span id="msg-error-receita"></span>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" name="nome_receita" id="nome_receita" class="form-control" placeholder="Nome da Receita"/>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="tempo_preparar" id="tempo_preparar" min="1" class="form-control" placeholder="Tempo de Preparo | Minutos"/>
                                </div>
                                <div class="col-12">
                                    <input type="number" name="porcao" id="porcao" min="1" class="form-control" placeholder="Rendimento | Porções"/>
                                </div>
                                <div class="col-12">
                                    <select name="categoria_receita" id="categoria_receita" class="form-select" placeholder="Categoria da Receita">
                                        <?php
                                            include('inc/conexao.inc');

                                            $categorias = "SELECT * FROM categorias";
                                            $query=mysqli_query($con, $categorias);

                                            if($categorias){
                                                if(mysqli_num_rows($query) > 0){
                                                    while(($resultadoC=mysqli_fetch_assoc($query)) != null){
                                                        echo '<option value="' . $resultadoC['id_categoria'] . '">' . utf8_encode($resultadoC['nome_categoria']) . '</option>';
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

                                <div class="col-6 center-flex">
                                    <p class="col-form-label"><b>Adicionar Ingredientes:</b></p>
                                </div>
                                <div class="col-6 center-flex">
                                    <button type="button" class="btn btn-ingrediente" onclick="addIngrediente('ingrediente-row')"><i class="bi bi-plus-square"></i></button>
                                </div>
                            </div>
                            <div class="form-group ingrediente-row row center-flex" id="ingrediente-row">
                                <div class="col-12">
                                    <label class="col-form-label center-flex">Ingrediente 1</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="qnt_ingrediente1" id="qnt_ingrediente1" class="form-control" placeholder="Quantidade"/>
                                </div>
                                <div class="col-12">
                                    <select name="medida_ingrediente1" id="medida_ingrediente1" class="form-control select">
                                        <option value="">Medida</option>
                                        <option value="1">Colher de Café</option>
                                        <option value="2">Colher de Chá</option>
                                        <option value="3">Colher de Sopa</option>
                                        <option value="4">Gramas</option>
                                        <option value="5">Litros</option>
                                        <option value="6">Mililitro</option>
                                        <option value="7">Quilograma</option>
                                        <option value="8">Unidade</option>
                                        <option value="9">Xícara</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="nome_ingrediente1" id="nome_ingrediente1" class="form-control" placeholder="Nome do Ingrediente"/>
                                </div>  
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-form-label">Modo de Preparo</label>
                                <p class="note">Descreva os passos por linha. Não use hífen, numeração ou outro marcador.</p>
                                <div class="col-12">
                                    <textarea name="modo_preparar" id="modo_preparar" rows="3" class="form-control" maxlength="999"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="status_receita" id="status_receita" value="0"/>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="enviarReceita" id="enviarReceita" value="Enviar" class="btn btn-submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>