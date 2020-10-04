
function requisicao(frase){

    $.ajax({
    method: "POST",
    url: "../back/processarDados.php",
    dataType: 'html',
    data: {
        dados: "2 222 222 33 66 8 88 777 33"
    },

    success: function (data) {
       alert(data);
        

    }
});
}


function digitar (numero) {

    $("#dados").append(numero);
    
    setTimeout(function () {

        $("#dados").append(" ");

    }, 2000);

}

$(document).ready(function(){
    //$("#dados").hide();
})


$(document).on("click",".botoes", function(e){
    var numero = e.val();
    digitar(numero);

} )


$(document).on("click","#botaoEnviar", function(){
    var dados = $("#dados").text();
    console.log(dados);
    console.log('oi');
    requisicao(dados);
})
