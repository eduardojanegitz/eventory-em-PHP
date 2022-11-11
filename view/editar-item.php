<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php
    $sql = "SELECT * FROM users WHERE id_users=" . $_REQUEST["id_asset"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
    ?>

    <h1 class="title-main">Novo Item</h1>


    <form class="flex" action="?page=salvar-ativo" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id_asset" value="<?php print $row->id_asset; ?>">

        <label class="box-label">Nome do Item</label>
        <input class="box" type="text" name="nome_ativo" value="<?php print $row->nome_ativo; ?>">

        <label class="box-label">Nome</label>
        <input class="box" type="text" name="depreciacao" value="<?php print $row->depreciacao; ?>">

         
        
            <button type="submit" class="btn">Enviar</button>
        
    </form>
</body>

</html>