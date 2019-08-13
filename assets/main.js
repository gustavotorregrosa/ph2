let url;
$(function(){
    url = $("meta[name=url]").attr("content");
    $.ajax({
        url: "getmensagem.php",
        method: "get",
        async: false,
        success: function(mensagem){
            if(mensagem !== ""){
                $.notify(mensagem, "success");
            }
        }
    });  

});

$(".am-deleta-produto").on("click", function(e){
    $('#mdl-deleta-produto').modal('show');
    let id = $(e.target).parents("tr").data("id");
    $('#mdl-deleta-produto #input-id-produto-del').val(id);
    let nome = $(e.target).parents("tr").data("nome");
    $('#mdl-deleta-produto #input-nome-produto-del').val(nome);
    $('#mdl-deleta-produto #nome-prd-del').html(nome);
    

});

$("#am-adiciona-produto").on("click", function(){
    $("#mdl-cria-produto").modal("show");
});


$(".am-edita-produto").on("click", function(e){
    $('#mdl-edita-produto').modal('show');
    let id = $(e.target).parents("tr").data("id");
    $.ajax({
        url: "getproduto.php",
        method: "get",
        data: {
            id
        },
        async: false,
        success: function(produto){
            $('#mdl-edita-produto #input-id-produto').val(produto.id);
            $('#mdl-edita-produto #input-nome-produto').val(produto.nome);
            $('#mdl-edita-produto #input-preco-produto').val(String(produto.preco).replace(".", ","));
            $('#mdl-edita-produto #input-descricao-produto').val(produto.descricao);
        }
    });
});

$('.moedareal').inputmask('decimal', {
    radixPoint:",",
    groupSeparator: ".",
    autoGroup: true,
    digits: 2,
    digitsOptional: false,
    placeholder: '0',
    rightAlign: false,
    // onBeforeMask: function (value, opts) {
    //   return value;
    // }
});