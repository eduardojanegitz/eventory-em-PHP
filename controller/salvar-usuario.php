<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
        $user = $_POST["user"];
        $name = $_POST["name"];
        $password = md5($_POST["password"]);
        $email = $_POST["email"];
        $department = $_POST["department"];

        $sql = "INSERT INTO users (usuario, senha, nome, email, departamento) VALUES
        ('{$user}','{$password}','{$name}','{$email}','{$department}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=cadastro;'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!');</script>";
            print "<script>location.href='?page=cadastro;'</script>";
        }
        break;
    case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);
        $data_nasc = $_POST["data_nasc"];

        $sql = "UPDATE usuarios SET 
                    nome='{$nome}',
                    email='{$email}',
                    senha='{$senha}',
                    data_nasc='{$data_nasc}'
                WHERE 
                    id=".$_REQUEST["id"];
                            

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
