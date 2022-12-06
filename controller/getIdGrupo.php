<?php
include_once("../model/config.php");

function retorna($nome_fantasia, $conn){
    $sql = "SELECT id_asset_group, descricao FROM asset_group WHERE descricao = '$nome_fantasia' LIMIT 1";
    $res = $conn->query($sql);
    if($res->num_rows){
        $row_cod = mysqli_fetch_assoc($res);
        $valores['id_asset_group'] = $row_cod['id_asset_group'];

    } else {
        $valores['id_asset_group'] = 'Código não encontrado';
    }
    return json_encode($valores);
}

if(isset($_GET['nome_fantasia'])){
    echo retorna($_GET['nome_fantasia'], $conn);
}
?>