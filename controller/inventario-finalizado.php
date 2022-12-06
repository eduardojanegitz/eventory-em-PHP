<?php
   include_once("../model/config.php");
    $nome_ativo = $_POST['nome_ativo'];
    $quantidade = $_POST['quantidade'];

    switch ($_REQUEST["inventario-finalizado"]) {
        case "cadastrar-leitura":
    $sql1 = "INSERT INTO INVENTARIO (nome_ativo, quantidade) VALUES ('{$nome_ativo}','{$quantidade}');";
    $res1 = $conn->query($sql);

    if($res == true) {
        echo "<script>alert('Inventário finalizado com sucesso');";
    }
}
    ?>