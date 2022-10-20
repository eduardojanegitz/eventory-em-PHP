<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Ler Barcode</title>
</head>

<body>
    <div class="main">
        <p>Barcode</p>
        <input type="text" class="input" placeholder="Enter Value" maxlength="10">
        <button class="submit" onclick="imprimir()" >Generate</button>
        <button class="submit" onclick="window.print()">Imprimir</button>
        
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