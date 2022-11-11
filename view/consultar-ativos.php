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
        <h1 class="title-main">Consultar Ativos</h1>
        <?php
        $sql = "SELECT * FROM asset";

        $res = $conn->query($sql);

        $qtd = $res->num_rows;

        if ($qtd > 0) {
            print "<table class='table flex'>";
            print "<tr class='table'>";
            print "<th>#</th>";
            print "<th class='table'>Nome do Ativo</th>";
            print "<th>Depreciação</th>";
            print "<th>Ações</th>";
            while ($row = $res->fetch_object()) {
                print "<tr class='table'>";
                print "<td>" . $row->id_asset. "</td>";
                print "<td>" . $row->nome_ativo . "</td>";
                print "<td>" . $row->depreciacao . "</td>";
                print "<td>
        <button class='btn-editar' onclick=\"location.href='?page=editar-item&id_asset=" . $row->id_asset. "';\" >Editar</button>
        <button class='btn-excluir' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id_asset=" . $row->id_asset . "';}else{false;}\"
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