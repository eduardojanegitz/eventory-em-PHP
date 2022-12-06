$(document).ready(function() {
    $("input[name='campo_cod']").blur(function() {
        var $nome_ativo = $("input[name='nome_ativo']");
        $.getJSON('../controller/getNomeItem.php', {
            campo_cod: $(this).val()
        }, function(json) {
            $nome_ativo.val(json.nome_ativo);
        });
    });
});

function lerItem(descricao, lote, quantidade) {
    var tb = document.getElementById("item-lido");
    var qtdLinhas = tb.rows.lenght;
    var linha = tb.insertRow(qtdLinhas);

    var cellDescricao = linha.insertCell(0);
    var cellLote = linha.insertCell(1);
    var cellQuantidade = linha.insertCell(2);

    cellDescricao.innerHTML = descricao;
    cellLote.innerHTML = lote;
    cellQuantidade.innerHTML = quantidade;
}

function submitForm() {
    document.campo.submit();
}