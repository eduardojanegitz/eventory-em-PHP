<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>

<div id="camera" >



</div> 
<h2 class="ler ">Código de Barras</h2>
<input id="campo-codigo" value="1|2|3"></input>
<button class="btn" style="margin-left: 17.9rem; margin-top: 0.68rem" onclick="ler()">Enviar</button>

<form method="post">
<input name="campo" id="campo" value="1"></input>
<button class="btn" type="submit">Enviar</button>
</form>

<?php
if(!isset($_POST)) {
   $campo = $_POST['campo'];
   $sql = "SELECT * FROM asset WHERE id_asset = '{$campo}';"; 
   $res = $conn->query($sql);
   $row = $res->fetch_object();
if($res == true) {
  echo $row->nome_ativo;
} else {
    echo "n";
}
} else {
    echo "nao tem";
}
  
   ?>
  

<script src="../js/quagga.min.js"></script>
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

       Quagga.onDetected(function nome (data) {
        var lendo = document.getElementById('campo-codigo').value;
        
        document.getElementById('campo-codigo').value = data.codeResult.code;
        console.log(data);
     
    })

   function ler() {
        var lendoCod = document.getElementById('campo-codigo').value.split('|');
        document.getElementById('campo').value = lendoCod[0];
        console.log(lendoCod);
   }

 

</script> 

</body>
</html>