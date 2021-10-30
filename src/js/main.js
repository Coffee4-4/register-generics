$(".btn-listar_cidade").on("click",function () {
    $.ajax({
        url: "controle.php",
        method: 'POST',
        data: "acao=listar_cidade&tipo=tabela",

        beforeSend: function() {
            carregando();
        },
        success: function(result) {
            $('#lista_cidade').html(result);
        },
        error: function(e) {
            console.log(e.status);
            if (e.status == 404) {
                errosend();
            }
        }
    });
})
