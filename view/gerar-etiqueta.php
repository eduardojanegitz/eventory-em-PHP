<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Grupos de Ativos</title>
</head>

<body>
<?php   
    // $sql = "SELECT concat(MAX(id_barcode), lote, qtd) FROM barcodee;";
    // $max = "SELECT MAX(id_barcode) FROM barcodee;";
    $sql = "SELECT * FROM barcodee ORDER BY id_barcode DESC;";
    
    // $res1 = $conn->query($max);
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <h1 class="title-main">Gerar Etiquetas</h1>
    <form class="flex" action="?page=salvar-etiqueta" method="POST">
        <input type="hidden" name="acao-etiqueta" value="cadastrar-etiqueta">
        <!-- <label class="box-label">Código do Ativo</label> -->
        <input class="box" type="text" name="cod_ativo" placeholder="Código do Item">

        <!-- <label class="box-label">Lote</label> -->
        <input class="box" type="text" name="lote" placeholder="Lote do Item">

        <!-- <label class="box-label">Quantidade</label> -->
        <input class="box" type="text" name="qtd" placeholder="Quantidade">

        <!-- <label class="box-label ">Número da Etiqueta</label>
        <input type="text" class="box input" maxlength="10" value="<?php print $row->id_asset . $row->lote . $row->qtd?>" disabled="disabled"> -->

        
        
        <button class="btn" type="submit" style="height: 3.5rem;">Salvar Etiqueta</button>
       
        <br>
    </form>
    <!-- <button style="margin-left: 10%" class="btn" onclick="barcodeGen()">Gerar Etiqueta</button>
    <svg id="barcode" class="box"></svg> -->
    
    <script src="../js/main.js"></script>
    <script src="../js/JsBarcode.all.min.js"></script>
</body>

</html>