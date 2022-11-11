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

        case "editar-item":
            $nome_ativo = $_POST["nome_ativo"];
            $depreciacao = $_POST["depreciacao"];
    
            $sql = "UPDATE asset SET 
                        nome_ativo='{$nome_ativo}',
                        depreciacao='{$depreciacao}',
                    WHERE 
                        id_asset=".$_REQUEST["id_asset"];
                                
    
            $res = $conn->query($sql);
    
            if ($res == true) {
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=listar;'</script>";
            } else {
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=listar;'</script>";
            }
            break;
        case "excluir":
            $sql = "DELETE FROM users WHERE id_users=".$_REQUEST["id_users"];
    
            $res = $conn->query($sql);
            if ($res == true) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=consultar;'</script>";
            } else {
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=consultar;'</script>";
            }
            break;
}
