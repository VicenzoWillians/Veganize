function removeUser(user){
    if(user !== ""){
        $.post("remover_usuario.php", {nome: user}, function(remover){

            if(remover){
                window.alert("Usuario Removido!");
                window.location.href = 'listar_usuarios.php';
            }
        });
    }
}