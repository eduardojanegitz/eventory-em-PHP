<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/menu.css">
    
</head>

<body>
    <h1 class="title-main">Ler Etiquetas</h1>
    <form class="flex" action="?page=salvar-leitura" method="POST">
        <input type="hidden" name="acao-leitura" value="cadastrar-leitura">
        <input class="box" type="text" name="local" placeholder="Local" required></input>
        <select class="box" name="grupo_itens" style="color: gray;" required>
     
            <option >Selecione o Grupo de Itens...</option>
            <?php
            $sql = "SELECT id_asset_group, descricao FROM asset_group ";
            $res = $conn->query($sql);

            while ($row = mysqli_fetch_assoc($res)) { ?>
                <option style="color: black;" value="<?php echo $row['descricao']; ?>"> <?php echo $row['descricao']; ?></option> <?php } ?>

        </select>
        <input class="box" id="data" type="date" name="data_inv" placeholder="Data" value="" readonly></input>
        <input class="box" type="text" name="responsavel" placeholder="Responsável" value="admin" readonly required></input>

        <button class="btn" type="submit" style="height: 3rem;">Inventariar</button>
    </form>
    <script>
        now = new Date;
        document.getElementById('data').value = now.getFullYear() + "-" + (now.getMonth() + 1) + "-0" + now.getDate()
    </script>

<style>
    
</style>

</body>

</html>