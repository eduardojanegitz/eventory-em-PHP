<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuários</title>
</head>

<body>
    <main>
        <h1 class="title-main">Consultar Usuários</h1>
        <?php
        $sql = "SELECT * FROM users";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table flex'>";
            print "<tr class='table'>";
            print "<th>#</th>";
            print "<th class='table'>Usuário</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Departamento</th>";
            print "<th>Ações</th>";
            while ($row = $res->fetch_object()) {
                print "<tr class='table'>";
                print "<td>" . $row->id_users . "</td>";
                print "<td>" . $row->usuario . "</td>";
                print "<td>" . $row->nome . "</td>";
                print "<td>" . $row->email . "</td>";
                print "<td>" . $row->departamento . "</td>";
                print "<td>
        <button class='btn-editar' onclick=\"location.href='?page=editar&id_users=" . $row->id_users . "';\" >Editar</button>
        <button class='btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id_users=" . $row->id_users . "';}else{false;}\"
        >Excluir</button>
        </td>";
                print "</tr>";
            }
            print "</table>";
        } else {
            print "<p class='flex'>Não foi encontrado nenhum resultado</p>";
        }

        ?>
    </main>
</body>

</html>