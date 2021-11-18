$(document).ready(function(){
    $('#formulario_receita').on('submit', function(event){
        event.preventDefault();

        if($('#nome_receita').val()==""){
            $("#msg-error-receita").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar o nome da receita!</div>');
        } else if($('#porcao').val()==""){
            $("#msg-error-receita").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar a quantidade de porções!</div>');
        } else if($('#ingredientes').val()==""){
            $("#msg-error-receita").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar os ingredientes!</div>');
        } else if($('#modo_preparar').val()==""){
            $("#msg-error-receita").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar como preparar a receita!</div>');
        } else if($('#tempo_preparar').val()==""){
            $("#msg-error-receita").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar o tempo de preparo da receita!</div>');
        } else{
            $('#enviarReceita').prop('disabled', true)
            var dadosReceita = $( this ).serializeArray();

            $.post("enviar_receita.php", dadosReceita, function(receita){

                if(receita){
                    $('#formulario_receita')[0].reset();
                    $('#receitasModal').modal('hide');
                    $('#enviarReceita').prop('disabled', false)

                    Swal.fire({
                        template: '#my-template-success-recipe',
                        customClass: 'template'
                    })
                            
                    $("#msg-error-receita").html('');

                    for(let i=line; i>=2; i--){
                        document.getElementById("ingrediente-row").removeChild(document.getElementById(""+i+""));
                    }
                    line = 1;
                }
            });
        }
    });

    $("#estados").change(function(){
        var valor = $('#estados').val();
        $('#cidades').load('cidades.php?estado=' + valor);

        $('#cidades').prop('disabled', false);

        if(valor === '0'){
            $('#cidades').prop('disabled', true);
        }
    });

    $( "#showPassword" ).click(function() {
        if($("#senha").prop("type") === 'password'){
            $("#senha").attr("type", "text");
            $("#showPassword").removeClass("bi bi-eye").addClass("bi bi-eye-slash");

        } else{
            $("#senha").attr("type", "password");
            $("#showPassword").removeClass("bi bi-eye-slash").addClass("bi bi-eye");

        }
    });

    $('#insert_form').on('submit', function(event){
        event.preventDefault();

        if($('#nome').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar um nome!</div>');
        } else if($('#email').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar um E-mail!</div>');
        }else if($('#senha').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar uma senha!</div>');
        }else if($('#idade').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar uma idade!</div>');
        }else if($('#telefone').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar um telefone!</div>');
        }else if($('#estados').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Escolha seu Estado!</div>');
        }else if($('#cidades').val()==""){
            $("#msg-error").html('<div class="alert alert-danger" role="alert">Escolha seu Cidade!</div>');
        }else{
            $('#cadUser').prop('disabled', true)
            var dados = $( this ).serializeArray();

            $.post("cadastro.php", dados, function(retorna){
                if(retorna){              
                    $('#insert_form')[0].reset();
                    $('#addUsuarioModal').modal('hide');
                    $('#cadUser').prop('disabled', false)

                    Swal.fire({
                        template: '#my-template-success-register',
                        customClass: 'template'
                    })

                    $("#msg-error").html('');

                } else{

                    $('#addUsuarioModal').modal('hide');
                    
                    Swal.fire({
                        template: '#my-template-error-register',
                        customClass: 'template'
                    })
                }
            });
        }
    });

    $('#form_contato').on('submit', function(event){
        event.preventDefault();

        if($('#assunto').val()==""){
            $("#msg-error-cont").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar o assunto!</div>');
        } else if($('#mensagem').val()==""){
            $("#msg-error-cont").html('<div class="alert alert-danger" role="alert">Você esqueceu de colocar a mensagem!</div>');
        } else{
            $('#sendMsg').prop('disabled', true)
            var dadosContato = $( this ).serializeArray();

            $.post("contato.php", dadosContato, function(contato){
                
                if(contato){              
                    $('#form_contato')[0].reset();

                    $('#contatoModal').modal('hide');
                    $('#sendMsg').prop('disabled', false)

                    Swal.fire({
                        template: '#my-template-success-contact',
                        customClass: 'template'
                    })
                    
                    $("#msg-error-cont").html('');
                }
            });
        }
    });
});

var line = 1;
function addIngrediente(divName){
    line++;
    var newdiv = document.createElement('div');
    newdiv.id=""+line+"";

    if(line <= 20) {
        newdiv.innerHTML += '<div class="col-12"> <label class="col-form-label center-flex">Ingrediente '+line+'</label></div>'
        newdiv.innerHTML += '<div class="col-12"> <input type="text" name="qnt_ingrediente'+line+'" id="qnt_ingrediente'+line+'" class="form-control" placeholder="Quantidade"/> </div>';
        newdiv.innerHTML += '<div class="col-12"> <select name="medida_ingrediente'+line+'" id="medida_ingrediente'+line+'" class="form-control select"> <option value="">Medida</option> <option value="1">Colher de Café</option> <option value="2">Colher de Chá</option> <option value="3">Colher de Sopa</option> <option value="4">Gramas</option> <option value="5">Litros</option> <option value="6">Mililitro</option> <option value="7">Quilograma</option> <option value="8">Unidade</option> <option value="9">Xícara</option> </select> </div>';
        newdiv.innerHTML += '<div class="col-12"> <input type="text" name="nome_ingrediente'+line+'" id="nome_ingrediente'+line+'" class="form-control" placeholder="Nome do Ingrediente"/> </div>';
        newdiv.innerHTML += '<input type="hidden" name="cont" id="cont" value="'+line+'" />';

        document.getElementById(divName).appendChild(newdiv);
    }else {        
        Swal.fire({
            template: '#my-template-recipe',
            customClass: 'template'
        })
    }
}

function valida_Nome(){
    var nome = document.getElementById("nome").value;

    $.post("valida_nome.php", {'nome': nome}, function(retornaNome){

        if(retornaNome=='1'){
            $('#erroNome').html('Esse nome de usuário já existe!');
        } else{
            $('#erroNome').html('');   
        }
    });

}

function valida_Email(){
    var email = document.getElementById("email").value;

    $.post("valida_email.php", {'email': email}, function(retornaEmail){

        if(retornaEmail=='1'){
            $('#erroEmail').html('Esse e-mail já foi cadastrado!');
        } else{
            $('#erroEmail').html('');   
        }
    });

}

function valida_Tel(){
    var telefone = document.getElementById("telefone").value;

    $.post("valida_telefone.php", {'telefone': telefone}, function(retornaTel){

        if(retornaTel=='1'){
            $('#erroTel').html('Esse telefone já foi cadastrado!');
        } else{
            $('#erroTel').html('');   
        }
    });

}

function verificaSessao(tipo){
    var tipoVerificacao = tipo;

    $.post("verifica_sessao.php", function(sessao){
        if(sessao == 0){
            if(tipoVerificacao == 'contato'){              
                Swal.fire({
                    template: '#my-template-contact',
                    customClass: 'template'
                })
            } else{
                Swal.fire({
                    template: '#my-template-submit-recipe',
                    customClass: 'template'
                })
            }
        } else{
            if(tipoVerificacao == 'contato'){
                $('#contatoModal').modal('show');
            } else {
                $('#receitasModal').modal('show');
            }
        }
    });
    
}