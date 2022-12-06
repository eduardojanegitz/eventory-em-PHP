<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="../js/leitura-etiquetas.js"></script>

    <link rel="icon" type="imagem/png" href="../images/logo-evecoding.png" />

    <title>Evecoding</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <?php
    include_once("../model/config.php");

    $sql = "SELECT id_item_inv FROM LER_ITEM_INV ORDER BY id_item_inv DESC;";
    $res = $conn->query($sql);

    $row = $res->fetch_object();
    ?>
    <h1 class="title-main leitura-direita">Inventário: <?php print $row->id_item_inv ?></h1>
    <h1 class="title-main" style="padding-left: 2rem;">Câmera de Leitura:</h1>

    <div id="camera">

    </div>
    <div>
        <h2 class="ler">Código de Barras</h2>
        <input id="campo-codigo" value="" name="campo"></input>
        <button class="btn-leitura" style="width: 5rem;" onclick="ler()">Enviar</button>
    </div>
    <form id="inventario-leitura" class="flex" method="post" action="">
        <input type="hidden"></input>
        <input class="box tes" name="campo_cod" id="campo-id" readonly autofocus></input>
        <input class="box tes" name="nome_ativo" readonly></input>
        <input class="box tes" name="lote" id="lote" readonly></input>
        <input class="box tes" name="quantidade" id="quantidade" readonly></input>

        <input type="button" class="btn-leitura" style="height: 2rem;" onclick="lerItem(nome_ativo.value, lote.value, quantidade.value)" value="Inventariar"></input>
    </form>

    <div>
        <table id="item-lido" class="inventario-leitura">
            <thead>
                <tr>
                    <td style="color: black;">Descrição do Item</td>
                    <td style="color: black;">Lote</td>
                    <td style="color: black;">Quantidade</td>
                </tr>
            </thead>
        </table>
        <button type="submit" class="btn">Finalizar</button>
    </div>



    <script src="../js/quagga.min.js"></script>
    <script>
        Quagga.init({
            inputStream: {
                name: "Live",
                type: "LiveStream",
                target: document.querySelector('#camera')
            },
            decoder: {
                readers: ["code_128_reader"]
            }
        }, function(err) {
            if (err) {
                console.log(err);
                return
            }
            console.log("Initialization finished. Ready to start");
            Quagga.start();
        });

        Quagga.onDetected(function nome(data) {
            var lendo = document.getElementById('campo-codigo').value;

            document.getElementById('campo-codigo').value = data.codeResult.code;
            console.log(data);

        })

        function ler() {
            var lendoCod = document.getElementById('campo-codigo').value.split('|');
            document.getElementById('campo-id').value = lendoCod[0];
            document.getElementById('lote').value = lendoCod[1];
            document.getElementById('quantidade').value = lendoCod[2];
            console.log(lendoCod);
        }
    </script>

</body>

</html>