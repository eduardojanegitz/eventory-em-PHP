function barcodeGen() {
    var data = document.querySelector('.input').value;
    JsBarcode('#barcode', data , {
        background : '#fff' ,
        color : '#000' ,
        height : 100,
        displayValue : true
    })
}


function m() {
    
    href.location('../view/barc.php');
}

function redirecionar(){
    window.location.href = "../view/barc.php";
    document.querySelector('#barcode').export();
}

function imprimir() {
    barcodeGen().print();
}