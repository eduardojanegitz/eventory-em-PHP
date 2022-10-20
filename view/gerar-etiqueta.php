<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
    <h1 class="title-main">Gerar Etiquetas</h1>
    <form class="flex" action="?page=salvar-etiqueta" method="POST">
        <input type="hidden" name="acao-etiqueta" value="cadastrar-etiqueta">
        <label class="box-label">Lote</label>
        <input class="box" type="text" name="lote">

        <label class="box-label">Quantidade</label>
        <input class="box" type="text" name="qtd">

        <label class="box-label ">Número da Etiqueta</label>
        <input type="text" class="box input" maxlength="10">

        
        
        <button class="btn" type="submit">Gerar</button>
       
        <br>
    </form>
    <button style="margin-left: 10%" class="btn" onclick="barcodeGen()">Gerar Etiqueta</button>
    <svg id="barcode" class="box"></svg>
    
    <script src="../js/main.js"></script>
    <script src="../js/JsBarcode.all.min.js"></script>
</body>

</html>