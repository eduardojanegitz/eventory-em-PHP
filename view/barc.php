<!DOCTYPE html>
<html lang="pt-br">
<?php
include("../model/config.php");
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php
    $sql = "SELECT concat(id_barcode, lote, qtd) from barcodee where id_barcode = 1;";
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    $lote = $_POST["lote"];
    
    ?>
    <form action="../controller/salvar-etiqueta.php" method="POST">
    <input type="text" class="input" placeholder="Enter Value" maxlength="10" value="<?php print $row->$lote; ?>">

    </form>
    <script src="../js/main.js"></script>
    <script src="../js/JsBarcode.all.min.js"></script>
</body>

</html>