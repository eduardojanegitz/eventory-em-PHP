<?php
switch ($_REQUEST["acao-etiqueta"]) {
    case "cadastrar-etiqueta":
        $lote = $_POST["lote"];
        $qtd = $_POST["qtd"];

        $sql = "INSERT INTO barcodee (lote, qtd) VALUES
        ('{$lote}','{$qtd}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='barcode.php;</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=etiqueta;</script>";
        }
        break;
    }
        ?>