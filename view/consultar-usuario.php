<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuários</title>
</head>

<body>
    <h1>Consultar Usuários</h1>
    <?php
    $sql = "SELECT * FROM users";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-border'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Usuário</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Departamento</th>";
        print "<th>Ações</th>";
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->id_users . "</td>";
            print "<td>" . $row->usuario . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->departamento . "</td>";
            print "<td>
        <button onclick=\"location.href='?page=editar&id=" . $row->id_users . "';\" class='btn btn-success'>Editar</button>
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id_users . "';}else{false;}\"
        class='btn btn-danger'>Excluir</button>
        </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert-danger'>Não foi encontrado nenhum resultado</p>";
    }

    ?>
</body>

</html>