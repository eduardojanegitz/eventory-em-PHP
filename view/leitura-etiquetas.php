<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="camera">
<button class="ler">Ler</button>

<input id="teste" value=""><script></script></input>
</div> 

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
        var lendo = document.getElementById('teste').value;
        
        document.getElementById('teste').value = data.codeResult.code;
    
     
    })

   function ler() {
        var lendo = document.queryElementById('teste').value;
        var res = lendo.split("|");
        console.log(res);
   }

</script> 

</body>
</html>