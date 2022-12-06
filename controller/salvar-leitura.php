<?php
switch ($_REQUEST["acao-leitura"]) {
    case "cadastrar-leitura":
        $local = $_POST["local"];
        $grupo_itens = $_POST["grupo_itens"];
        $data_inv = $_POST["data_inv"];
        $responsavel = $_POST["responsavel"];

        $sql = "INSERT INTO LER_ITEM_INV (data_inv, responsavel, sala, descricao_grupo) VALUES
        ('{$data_inv}','{$responsavel}','{$local}','{$grupo_itens}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>location.href='../view/inventario.php'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=leitura-etiquetas;</script>";
        }
        break;
    }
        ?>