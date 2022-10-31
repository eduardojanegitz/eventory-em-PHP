<!DOCTYPE html>
<?php
include("../model/config.php");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <title>Ler Barcode</title>
</head>

<body>
<?php   
    // $sql = "SELECT concat(MAX(id_barcode), lote, qtd) FROM barcodee;";
    $sql = "SELECT * FROM barcodee ORDER BY id_barcode DESC;";
    // $sql1 = "SELECT b.lote, b.qtd, a.nome_ativo from barcodee AS b INNER JOIN asset AS a ON(b.id_asset = a.id_asset) WHERE b.id_asset = {$row->id_asset} ;";
    // $res1 = $conn->query($max);
    
    $res = $conn->query($sql);
   
    $row = $res->fetch_object();
    ?>
    <div class="main">
        <input type="text" class="input" placeholder="Enter Value" maxlength="10" value="<?php print $row->id_asset . $row->lote . $row->qtd?>" disabled="disabled">
        <?php
        $sql1 = "SELECT b.lote, b.qtd, a.nome_ativo from barcodee AS b INNER JOIN asset AS a ON(b.id_asset = a.id_asset) WHERE b.id_asset = {$row->id_asset} ;";
        $res1 = $conn->query($sql1);
        $row1 = $res1->fetch_object();
        print $row1->nome_ativo;

        ?>
        <img class="img" src="../images/logo-facens-azul.png" alt="">
        <button class="submit" onclick="imprimir()">Gerar</button>
        <button class="submit " onclick="window.print()">Imprimir</button>
        
        <svg id="barcode" ></svg>
    </div>

   
    <!-- <div id="camera">

    </div> -->

    <!-- <script src="quagga.min.js"></script>
    <script>
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')    // Or '#yourElement' (optional)
            },
            decoder: {
                readers: ["code_128_reader"]
            }
        }, function (err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function (data) {
            console.log(data);
        })
    </script> -->

    <script src="../js/main.js"></script>
    <script src="../js/JsBarcode.all.min.js"></script>
</body>

</html>