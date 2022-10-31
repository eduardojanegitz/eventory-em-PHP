<?php
switch ($_REQUEST["acao-ativos"]) {
    case "cadastrar-ativos":
        $description = $_POST["description"];
        $alternative = $_POST["alternative"];

        $sql = "INSERT INTO asset_group (descricao, cod_alternativo) VALUES
        ('{$description}','{$alternative}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=cadastro-grupo-ativos;'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=cadastro-grupo-ativos;'</script>";
        }
        break;

    case "cadastrar-patrimonio":
        $nome = $_POST["nome"];
        $nf = $_POST["nf"];
        $fornecedor = $_POST["fornecedor"];
        $valor = $_POST["valor"];
        $depreciacao = $_POST["depreciacao"];

        $sql = "INSERT INTO asset (nome_ativo, nf, fornecedor, valor, depreciacao) VALUES
            ('{$nome}','{$nf}','{$fornecedor}','{$valor}','{$depreciacao}')";
        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='menu.php'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=cadastro-grupo-ativos;'</script>";
        }
        break;
}
