<?php
include_once("../model/config.php");

function retornaNome($campo_cod, $conn){
    $sql = "SELECT * FROM asset WHERE id_asset = '$campo_cod' LIMIT 1";
    $res = $conn->query($sql);
    if($res->num_rows){
        $row_nome = mysqli_fetch_assoc($res);
        $valores['nome_ativo'] = $row_nome['nome_ativo'];

    } else {
        $valores['nome_ativo'] = 'Código não encontrado';
    }
    return json_encode($valores);
}

if(isset($_GET['campo_cod'])){
    echo retornaNome($_GET['campo_cod'], $conn);
}
?>