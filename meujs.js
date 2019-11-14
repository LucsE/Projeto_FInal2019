/**
 * salvar()
 * Função para salvar no banco de dados executando código PHP
 */
function salvar(){

    $.ajax({
        method: "post",
        url: "AdmController.php",
        data: $("#form").serialize(),
    success: function(data){
               alert(data);
    }

});
}
