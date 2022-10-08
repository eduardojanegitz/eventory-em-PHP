<?php
switch ($_REQUEST["acao-ativos"]) {
    case "cadastrar":
        $description = $_POST["description"];
        $alternative = $_POST["alternative"];

        $sql = "INSERT INTO asset_group (descricao, cod_alternativo) VALUES
        ('{$description}','{$alternative}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=cadastro-grupo-ativos;</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=cadastro-grupo-ativos;</script>";
        }
        break;
    }
        ?>