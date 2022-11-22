<!DOCTYPE html>
<html lang="pt-br">
    <?php
    include("../model/config.php");
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Usuários</title>
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <main>
        <h1 class="title-main">Depreciação</h1>
        <?php
            
        
        $sql = "SELECT * FROM asset";

        $res = $conn->query($sql);

        function residual(){
            $sql = "SELECT * FROM asset";
            include("../model/config.php");
            $res = $conn->query($sql);
            while($row = $res->fetch_object()){
                $row->valor - $row->depreciacao;
            }
        }
        $qtd = $res->num_rows;

        print "<div class='date'>
        <input type='date'>
    </div>";

        if ($qtd > 0) {
            print "<table class='table flex'>";
            print "<tr class='table'>";
            print "<th class='table'>Nome do Item</th>";
            print "<th class='table'>Fornecedor</th>";
            print "<th>Depreciação(%)</th>";
            print "<th>Valor (R$)</th>";
            print "<th>Taxa Mensal</th>";
            print "<th>Saldo Residual</th>";
            while ($row = $res->fetch_object()) {
                print "<tr class='table'>";
                print "<td>" . $row->nome_ativo . "</td>";
                print "<td>" . $row->fornecedor . "</td>";
                print "<td>" . $row->depreciacao . "</td>";
                print "<td>" . $row->valor . "</td>";
                print "<td>" . $row->valor * (($row->depreciacao / 100) / 12)  . "</td>";
                print "<td>" . $row->valor - ($row->valor * (($row->depreciacao / 100) / 12))  . "</td>";
            ;
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