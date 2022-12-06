<!DOCTYPE html>
<html lang="pt-br">
    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
</head>

<body>
    <main>
        <h1 class="title-main">Depreciação</h1>
        <?php
            
        include("../model/config.php");
        $sql = "SELECT * FROM asset";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
        $row = $res->fetch_object();
        
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
                $number = $row->valor * (($row->depreciacao / 100) / 12);
        $number1 =  $row->valor - ($row->valor * (($row->depreciacao / 100) / 12));
                print "<tr class='table'>";
                print "<td>" . $row->nome_ativo . "</td>";
                print "<td>" . $row->fornecedor . "</td>";
                print "<td>" . $row->depreciacao . "</td>";
                print "<td>" . $row->valor . "</td>";
                print "<td>" . number_format($number, 2,'.'."")  . "</td>";
                print "<td>" . number_format($number1, 2,'.'."")  . "</td>";
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