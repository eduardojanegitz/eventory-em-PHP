<?php
switch ($_REQUEST["acao-etiqueta"]) {
    case "cadastrar-etiqueta":
        $lote = $_POST["lote"];
        $qtd = $_POST["qtd"];
        $cod_ativo = $_POST["cod_ativo"];

        $sql = "INSERT INTO barcodee (lote, qtd, id_asset) VALUES
        ('{$lote}','{$qtd}','{$cod_ativo}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='../view/barcode.php'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=etiqueta;</script>";
        }
        break;
    }
        ?>