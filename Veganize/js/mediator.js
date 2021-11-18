function approveRecipe(recipe){
    if(recipe !== ""){
        $.post("aprovar_receita.php", {id: recipe}, function(aprovar){

            if(aprovar){
                window.alert("Receita Aprovada!");
                window.location.href = 'listar_receitas.php';
            }
        });
    }
}

function disapproveRecipe(recipe){
    if(recipe !== ""){
        $.post("reprovar_receita.php", {id: recipe}, function(reprovar){

            if(reprovar){
                window.alert("Receita Reprovada!");
                window.location.href = 'listar_receitas.php';
            }
        });
    }
}